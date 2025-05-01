<?php

namespace App\Controller\Admin;

use App\Entity\Materiel;
use App\Entity\TypeMateriel;
use App\Form\MaterielType;
use App\Service\FileUp;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use TCPDF;
use Psr\Log\LoggerInterface;
use App\Service\ExcelService;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;




#[Route('/admin/gestionmateriel')]
class MaterielController extends AbstractController
{
    #[Route('/', name: 'admin_gestionmateriel_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $materiels = $entityManager->getRepository(Materiel::class)->findAll();
        $typeMaterielNames = [];

        foreach ($materiels as $materiel) {
            $typeMaterielId = $materiel->getTypeMaterielId();
            $typeMateriel = $typeMaterielId ? $entityManager->getRepository(TypeMateriel::class)->find($typeMaterielId) : null;
            $typeMaterielNames[$materiel->getId()] = $typeMateriel ? $typeMateriel->getNomm() : 'N/A';
        }

        return $this->render('Admin/GestionMateriel/materiel/index.html.twig', [
            'materiels' => $materiels,
            'typeMaterielNames' => $typeMaterielNames,
        ]);
    }

   

#[Route('/new', name: 'admin_gestionmateriel_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager, FileUp $fileUploader, SluggerInterface $slugger): Response
{
    $materiel = new Materiel();
    $form = $this->createForm(MaterielType::class, $materiel);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $typeMateriel = $form->get('typeMaterielId')->getData();
        if ($typeMateriel) {
            $materiel->setTypeMaterielId($typeMateriel->getId());
        }

        $imageFile = $form->get('imageFile')->getData();

        if ($imageFile) {
            try {
                $newFilename = $fileUploader->upload($imageFile, $slugger);
                $materiel->setImagePath($newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
            }
        }
        $entityManager->persist($materiel);
        $entityManager->flush();

        $this->addFlash('success', 'Material created successfully!');
        return $this->redirectToRoute('admin_gestionmateriel_index', [], Response::HTTP_SEE_OTHER);
    }

    return $this->render('Admin/GestionMateriel/materiel/new.html.twig', [
        'materiel' => $materiel,
        'form' => $form->createView(),
    ]);
}


#[Route('/{id}/edit', name: 'admin_gestionmateriel_edit', methods: ['GET', 'POST'])]
public function edit(
    Request $request, 
    int $id, 
    EntityManagerInterface $entityManager, 
    FileUp $fileUploader, 
    SluggerInterface $slugger
): Response {
    // Fetch the material by ID
    $materiel = $entityManager->getRepository(Materiel::class)->find($id);

    if (!$materiel) {
        throw $this->createNotFoundException('Material not found');
    }

    $originalEtat = $materiel->getEtat(); // Store original status

    $form = $this->createForm(MaterielType::class, $materiel);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Check for status change
        $newEtat = $materiel->getEtat();
        if ($originalEtat !== $newEtat) {
            $notificationMessage = $newEtat === 'DISPONIBLE'
                ? sprintf('%s is now available for reservations!', $materiel->getNom())
                : sprintf('%s is no longer available to reserve!', $materiel->getNom());
            $this->addFlash('info', $notificationMessage); // Add specific notification
        }

        // Save changes to the database
        $entityManager->flush();

        return $this->redirectToRoute('admin_gestionmateriel_index');
    }

    return $this->render('Admin/GestionMateriel/materiel/edit.html.twig', [
        'materiel' => $materiel,
        'form' => $form->createView(),
    ]);
}
    #[Route('/{id}', name: 'admin_gestionmateriel_delete', methods: ['POST'])]
    public function delete(Request $request, Materiel $materiel, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materiel->getId(), $request->request->get('_token'))) {
            $entityManager->remove($materiel);
            $entityManager->flush();
            $this->addFlash('success', 'Material deleted successfully!');
        }

        return $this->redirectToRoute('admin_gestionmateriel_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/gestionmateriel/search', name: 'admin_gestionmateriel_search', methods: ['GET'])]
public function search(Request $request, EntityManagerInterface $entityManager): JsonResponse
{
    $searchTerm = $request->query->get('q', ''); // Recherche principale (par nom, prix ou type)
    $sort = $request->query->get('sort', ''); // Tri : 'name_asc', 'name_desc', 'price_asc', 'price_desc'
    $etat = $request->query->get('etat', ''); // Filtrer par état : 'DISPONIBLE', 'INDISPONIBLE', ou vide

    $queryBuilder = $entityManager->getRepository(Materiel::class)->createQueryBuilder('m');

    // Recherche par nom, prix ou type
    if (!empty($searchTerm)) {
        $queryBuilder->where('m.nom LIKE :searchTerm') // Recherche par nom
            ->orWhere('m.prix = :exactPrix') // Recherche par prix exact
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->setParameter('exactPrix', is_numeric($searchTerm) ? $searchTerm : -1); // Si c'est un nombre, recherche par prix exact

        // Recherche par type (join avec TypeMateriel)
        $types = $entityManager->getRepository(TypeMateriel::class)->createQueryBuilder('tm')
            ->select('tm.id')
            ->where('tm.nomm LIKE :typeSearch')
            ->setParameter('typeSearch', '%' . $searchTerm . '%')
            ->getQuery()
            ->getResult();

        if (!empty($types)) {
            $typeIds = array_map(fn($type) => $type['id'], $types);
            $queryBuilder->orWhere('m.typeMaterielId IN (:typeIds)')
                ->setParameter('typeIds', $typeIds);
        }
    }

    // Filtrer par état
    if (!empty($etat)) {
        $queryBuilder->andWhere('m.etat = :etat')
            ->setParameter('etat', $etat);
    }

    // Tri des résultats
    if ($sort === 'name_asc') {
        $queryBuilder->orderBy('m.nom', 'ASC');
    } elseif ($sort === 'name_desc') {
        $queryBuilder->orderBy('m.nom', 'DESC');
    } elseif ($sort === 'price_asc') {
        $queryBuilder->orderBy('m.prix', 'ASC');
    } elseif ($sort === 'price_desc') {
        $queryBuilder->orderBy('m.prix', 'DESC');
    }

    $materiels = $queryBuilder->getQuery()->getResult();

    // Préparer la réponse JSON
    $response = [];
    foreach ($materiels as $materiel) {
        $typeMaterielId = $materiel->getTypeMaterielId();
        $typeMateriel = $typeMaterielId ? $entityManager->getRepository(TypeMateriel::class)->find($typeMaterielId) : null;
        $typeMaterielName = $typeMateriel ? $typeMateriel->getNomm() : 'N/A';

        $response[] = [
            'id' => $materiel->getId(),
            'nom' => $materiel->getNom(),
            'prix' => $materiel->getPrix(),
            'etat' => $materiel->getEtat(),
            'imagePath' => $materiel->getImagePath(),
            'typeMateriel' => $typeMaterielName, // Nom du type de matériel
            'typeMaterielId' => $typeMaterielId // ID du type de matériel
        ];
    }

    return new JsonResponse(['materiels' => $response]);
}
#[Route('/{id}/qr-code', name: 'admin_gestionmateriel_qr_code', methods: ['GET'])]
public function qrCode(Materiel $materiel, EntityManagerInterface $entityManager): JsonResponse
{
    try {
        $originalMemoryLimit = ini_get('memory_limit');
        ini_set('memory_limit', '256M');

        $typeMaterielName = 'N/A';
        if ($materiel->getTypeMaterielId()) {
            $typeMateriel = $entityManager->getRepository(TypeMateriel::class)->find($materiel->getTypeMaterielId());
            $typeMaterielName = $typeMateriel ? $typeMateriel->getNomm() : 'N/A';
            unset($typeMateriel);
        }

        $formattedText = implode("\n", [
            "=== MATERIAL INFORMATION ===",
            "ID:     " . $materiel->getId(),
            "Name:   " . $materiel->getNom(),
            "Price:  " . $materiel->getPrix() . " TND",
            "Status: " . $materiel->getEtat(),
            "Type:   " . $typeMaterielName,
            "Scanned: " . (new \DateTime())->format('Y-m-d H:i'),
            "========================"
        ]);

        // Proper Builder initialization for v4.x
        $builder = new Builder(
            new PngWriter(),
            [],  // writerOptions
            false,  // validateResult
            $formattedText,
            new Encoding('UTF-8'),
            ErrorCorrectionLevel::High,
            250,  // size
            5,    // margin
            RoundBlockSizeMode::Margin
        );

        $result = $builder->build();
        $imageData = $result->getString();
        $base64 = base64_encode($imageData);
        
        unset($result, $imageData);
        ini_set('memory_limit', $originalMemoryLimit);

        return new JsonResponse([
            'qr_code' => 'data:image/png;base64,' . $base64
        ]);

    } catch (\Throwable $e) {
        isset($originalMemoryLimit) && ini_set('memory_limit', $originalMemoryLimit);
        return new JsonResponse([
            'error' => 'QR Generation Failed',
            'message' => $e->getMessage()
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
#[Route('/admin/gestionmateriel/statistics', name: 'admin_gestionmateriel_statistics', methods: ['GET'])]
public function statistics(EntityManagerInterface $entityManager): JsonResponse
{
    // Récupérer tous les matériels et les types
    $materiels = $entityManager->getRepository(Materiel::class)->findAll();
    $types = $entityManager->getRepository(TypeMateriel::class)->findAll();

    $total = count($materiels);

    // Si aucun matériel n'est trouvé
    if ($total === 0) {
        return new JsonResponse([
            'error' => 'Aucun matériel trouvé',
            'total' => 0
        ], 200, [
            'Access-Control-Allow-Origin' => '*'
        ]);
    }

    // Initialisation des statistiques
    $availabilityStats = [
        'disponible' => 0,
        'indisponible' => 0
    ];

    $typeStats = [];
    $priceList = [];

    // Calculer les statistiques
    foreach ($materiels as $materiel) {
        // Disponibilité
        $etat = $materiel->getEtat();
        if ($etat === 'DISPONIBLE') {
            $availabilityStats['disponible']++;
        } elseif ($etat === 'INDISPONIBLE') {
            $availabilityStats['indisponible']++;
        }

        // Prix pour statistiques
        $priceList[] = $materiel->getPrix();

        // Types
        $typeId = $materiel->getTypeMaterielId();
        if (!isset($typeStats[$typeId])) {
            $typeStats[$typeId] = [
                'type' => null,
                'count' => 0
            ];
        }
        $typeStats[$typeId]['count']++;
    }

    // Ajouter les noms des types et calculer les pourcentages
    foreach ($types as $type) {
        $typeId = $type->getId();
        if (isset($typeStats[$typeId])) {
            $typeStats[$typeId]['type'] = $type->getNomm();
            $typeStats[$typeId]['percentage'] = round(($typeStats[$typeId]['count'] / $total) * 100, 2);
        }
    }

    // Convertir les statistiques des types en liste
    $typeStatsList = array_values($typeStats);

    // Calcul des pourcentages de disponibilité
    $availabilityStats = [
        'disponible' => [
            'count' => $availabilityStats['disponible'],
            'percentage' => round(($availabilityStats['disponible'] / $total) * 100, 2)
        ],
        'indisponible' => [
            'count' => $availabilityStats['indisponible'],
            'percentage' => round(($availabilityStats['indisponible'] / $total) * 100, 2)
        ]
    ];

    // Statistiques sur les prix
    $priceStats = [
        'average' => round(array_sum($priceList) / $total, 2),
        'min' => min($priceList),
        'max' => max($priceList)
    ];

    // Réponse JSON
    return new JsonResponse([
        'total' => $total,
        'availability' => $availabilityStats,
        'by_type' => $typeStatsList,
        'price_stats' => $priceStats
    ], 200, [
        'Access-Control-Allow-Origin' => '*'
    ]);
}
#[Route('/generate-pdf', name: 'admin_gestionmateriel_pdf', methods: ['GET'])]
public function generatePdf(EntityManagerInterface $entityManager): Response
{
    try {
        // Fetch all materials with their types
        $materiels = $entityManager->getRepository(Materiel::class)->findAll();

        if (empty($materiels)) {
            throw $this->createNotFoundException('No materials found to generate PDF');
        }

        $typeMaterielNames = [];
        $typeMaterielRepo = $entityManager->getRepository(TypeMateriel::class);

        foreach ($materiels as $materiel) {
            $typeMaterielId = $materiel->getTypeMaterielId();
            $typeMateriel = $typeMaterielId ? $typeMaterielRepo->find($typeMaterielId) : null;
            $typeMaterielNames[$materiel->getId()] = $typeMateriel ? $typeMateriel->getNomm() : 'N/A';
        }

        // Create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // Set document information
        $pdf->SetCreator('Eventopia');
        $pdf->SetAuthor('Eventopia Admin');
        $pdf->SetTitle('Material List');
        $pdf->SetSubject('Material List');

        // Add a page
        $pdf->AddPage();

        // Add title
        $pdf->SetFont('helvetica', 'B', 16);
        $pdf->Cell(0, 10, 'Material List', 0, 1, 'C');
        $pdf->Ln(10);

        // Create table header
        $pdf->SetFont('helvetica', 'B', 12);
        $header = ['Image', 'Name', 'Price (TND)', 'Status', 'Type'];
        $w = [30, 50, 30, 30, 40]; // Adjust column widths to fit the image

        for ($i = 0; $i < count($header); ++$i) {
            $pdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C');
        }
        $pdf->Ln();

        // Add materials data with editable fields and images
        $pdf->SetFont('helvetica', '', 10);
        foreach ($materiels as $materiel) {
            // Image column
            if ($materiel->getImagePath() && file_exists($materiel->getImagePath())) {
                $pdf->Cell($w[0], 20, '', 1, 0, 'C', false, '', 0, true, 'T', 'C');
                $pdf->Image(
                    $materiel->getImagePath(),
                    $pdf->GetX() - $w[0], // Position to fit the image in the cell
                    $pdf->GetY(),
                    $w[0], // Width
                    20     // Height
                );
            } else {
                $pdf->Cell($w[0], 20, 'No Image', 1, 0, 'C');
            }

            // Name field
            $pdf->TextField(
                'name_' . $materiel->getId(),
                $w[1], // Width
                6,     // Height
                ['multiline' => false], // Options
                ['v' => $materiel->getNom()] // Default value
            );

            // Price field
            $pdf->TextField(
                'price_' . $materiel->getId(),
                $w[2],
                6,
                ['multiline' => false],
                ['v' => $materiel->getPrix()]
            );

            // Status field
            $pdf->TextField(
                'status_' . $materiel->getId(),
                $w[3],
                6,
                ['multiline' => false],
                ['v' => $materiel->getEtat()]
            );

            // Type field
            $pdf->TextField(
                'type_' . $materiel->getId(),
                $w[4],
                6,
                ['multiline' => false],
                ['v' => $typeMaterielNames[$materiel->getId()] ?? 'N/A']
            );

            $pdf->Ln();
        }

        // Close table
        $pdf->Cell(array_sum($w), 0, '', 'T');

        // Output PDF as download
        return new Response(
            $pdf->Output('material_list.pdf', 'S'),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="material_list.pdf"'
            ]
        );

    } catch (\Exception $e) {
        $this->addFlash('error', 'Error generating PDF: ' . $e->getMessage());
        return $this->redirectToRoute('admin_gestionmateriel_index');
    }
}
#[Route('/admin/gestionmateriel/bulk-action', name: 'admin_gestionmateriel_bulk_action', methods: ['POST'])]
public function bulkAction(Request $request, EntityManagerInterface $entityManager): JsonResponse
{
    $data = json_decode($request->getContent(), true);

    if (!isset($data['action']) || !isset($data['materials']) || empty($data['materials'])) {
        return new JsonResponse(['success' => false, 'message' => 'Invalid input or no materials selected.'], 400);
    }

    $action = $data['action'];
    $materials = $data['materials'];

    try {
        if ($action === 'delete') {
            foreach ($materials as $materialId) {
                $material = $entityManager->getRepository(Materiel::class)->find($materialId);
                if ($material) {
                    $entityManager->remove($material);
                }
            }
            $entityManager->flush();

            return new JsonResponse(['success' => true, 'message' => 'Materials deleted successfully.']);
        }

        return new JsonResponse(['success' => false, 'message' => 'Unknown action.'], 400);
    } catch (\Exception $e) {
        return new JsonResponse(['success' => false, 'message' => 'An unexpected error occurred.'], 500);
    }
}
#[Route('/export-excel', name: 'admin_gestionmateriel_export_excel', methods: ['GET'])]
public function exportExcel(EntityManagerInterface $entityManager): Response
{
    $materiels = $entityManager->getRepository(Materiel::class)->findAll();

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Ajouter les en-têtes
    $header = ['ID', 'Nom', 'Prix', 'État', 'Type de Matériel', 'Image'];
    $columns = range('A', 'Z');
    foreach ($header as $key => $value) {
        $sheet->setCellValue($columns[$key] . '1', $value);
    }

    // Ajuster automatiquement la largeur des colonnes pour les en-têtes
    foreach ($columns as $key => $column) {
        if ($key < count($header)) {
            $sheet->getColumnDimension($column)->setAutoSize(true);
        }
    }

    // Ajouter les données
    $rowIndex = 2;
    foreach ($materiels as $materiel) {
        $typeMaterielId = $materiel->getTypeMaterielId();
        $typeMateriel = $typeMaterielId ? $entityManager->getRepository(TypeMateriel::class)->find($typeMaterielId) : null;
        $typeMaterielName = $typeMateriel ? $typeMateriel->getNomm() : 'N/A';

        $sheet->setCellValue('A' . $rowIndex, $materiel->getId());
        $sheet->setCellValue('B' . $rowIndex, $materiel->getNom());
        $sheet->setCellValue('C' . $rowIndex, $materiel->getPrix());
        $sheet->setCellValue('D' . $rowIndex, $materiel->getEtat());
        $sheet->setCellValue('E' . $rowIndex, $typeMaterielName);

        // Ajouter l'image (si elle existe) et ajuster la hauteur de la ligne
        if ($materiel->getImagePath()) { // Assurez-vous que votre entité Materiel a une méthode getImagePath()
            $imagePath = $materiel->getImagePath();
            if (file_exists($imagePath)) {
                $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
                $drawing->setName('Image');
                $drawing->setDescription('Image');
                $drawing->setPath($imagePath); // Chemin de l'image
                $drawing->setHeight(50); // Ajustez la hauteur selon vos besoins
                $drawing->setCoordinates('F' . $rowIndex); // Colonne F pour les images
                $drawing->setWorksheet($sheet);

                // Ajuster la hauteur de la ligne pour l'image
                $sheet->getRowDimension($rowIndex)->setRowHeight(60); // Ajustez si nécessaire
            }
        }

        $rowIndex++;
    }

    // Sauvegarder dans un fichier temporaire
    $filePath = sys_get_temp_dir() . '/materials.xlsx';
    $writer = new Xlsx($spreadsheet);
    $writer->save($filePath);

    // Retourner le fichier comme téléchargement
    return $this->file($filePath, 'materials.xlsx', 'attachment', [
        'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    ]);
}
    #[Route('/{id}', name: 'admin_gestionmateriel_show', methods: ['GET'], requirements: ['id' => '\d+'])]
public function show(Materiel $materiel, EntityManagerInterface $entityManager): Response
{
        $typeMaterielId = $materiel->getTypeMaterielId();
        $typeMateriel = $typeMaterielId ? $entityManager->getRepository(TypeMateriel::class)->find($typeMaterielId) : null;
        $typeMaterielName = $typeMateriel ? $typeMateriel->getNomm() : 'N/A';

        return $this->render('Admin/GestionMateriel/materiel/show.html.twig', [
            'materiel' => $materiel,
            'typeMaterielName' => $typeMaterielName,
        ]);
    }
    

}
