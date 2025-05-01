<?php

namespace App\Controller\Admin;

use App\Entity\Espace;
use App\Form\EspaceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\JsonResponse;


class EspaceController extends AbstractController
{
    #[Route('/admin/espace/export/pdf', name: 'admin_espace_export_pdf', methods: ['GET'])]
public function exportToPdf(EntityManagerInterface $entityManager, Request $request): Response
{
    // Retrieve the current search term and filters from the query parameters
    $searchTerm = $request->query->get('q'); // Search term (e.g., "Tunis")
    $etatFilter = $request->query->get('etat'); // Optional filter by state (DISPONIBLE/INDISPONIBLE)

    // Build the query to fetch filtered spaces
    $queryBuilder = $entityManager->getRepository(Espace::class)->createQueryBuilder('e');

    if ($searchTerm) {
        // Filter by localisation (search term)
        $queryBuilder
            ->andWhere('e.localisation LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%');
    }

    if ($etatFilter && $etatFilter !== 'all') {
        // Add additional filter by état (state)
        $queryBuilder
            ->andWhere('e.etat = :etat')
            ->setParameter('etat', $etatFilter);
    }

    // Execute the query and get the filtered results
    $espaces = $queryBuilder->getQuery()->getResult();

    // Generate the PDF content
    $html = $this->renderView('admin/Gestionespace/pdf.html.twig', [
        'espaces' => $espaces,
        'searchTerm' => $searchTerm,
        'etatFilter' => $etatFilter,
    ]);

    // Use Dompdf to generate the PDF
    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait'); // Set paper size and orientation
    $dompdf->render();

    // Prepare the response
    $response = new Response($dompdf->output(), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="espaces_' . date('Y-m-d_H-i-s') . '.pdf"',
    ]);

    return $response;
}
    #[Route('/admin/espace/statistics', name: 'admin_espace_statistics', methods: ['GET'])]
public function getStatistics(EntityManagerInterface $entityManager): JsonResponse
{
    
    $etatCounts = $entityManager->getRepository(Espace::class)
        ->createQueryBuilder('e')
        ->select('e.etat, COUNT(e.id) as count')
        ->groupBy('e.etat')
        ->getQuery()
        ->getResult();

    
    $etatData = [
        'DISPONIBLE' => 0,
        'INDISPONIBLE' => 0,
    ];
    foreach ($etatCounts as $row) {
        $etat = $row['etat'];
        if (array_key_exists($etat, $etatData)) {
            $etatData[$etat] = (int)$row['count'];
        }
    }

    
    $typeEspaceCounts = $entityManager->getRepository(Espace::class)
        ->createQueryBuilder('e')
        ->select('t.type, COUNT(e.id) as count')
        ->join('e.typeEspace', 't') 
        ->groupBy('t.type')
        ->getQuery()
        ->getResult();

    
    $typeEspaceData = [];
    foreach ($typeEspaceCounts as $row) {
        $type = $row['type'];
        $typeEspaceData[$type] = (int)$row['count'];
    }

    
    return $this->json([
        'etat' => $etatData,
        'typeEspace' => $typeEspaceData,
    ]);
}
#[Route('/admin/espace/export', name: 'admin_espace_export', methods: ['GET'])]
public function exportToExcel(EntityManagerInterface $entityManager, Request $request): Response
{
    // Retrieve the current search term and filters from the query parameters
    $searchTerm = $request->query->get('q'); // Search term (e.g., "Tunis")
    $etatFilter = $request->query->get('etat'); // Optional filter by state (DISPONIBLE/INDISPONIBLE)

    // Build the query to fetch filtered spaces
    $queryBuilder = $entityManager->getRepository(Espace::class)->createQueryBuilder('e');

    if ($searchTerm) {
        // Filter by localisation (search term)
        $queryBuilder
            ->andWhere('e.localisation LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%');
    }

    if ($etatFilter && $etatFilter !== 'all') {
        // Add additional filter by état (state)
        $queryBuilder
            ->andWhere('e.etat = :etat')
            ->setParameter('etat', $etatFilter);
    }

    // Execute the query and get the filtered results
    $espaces = $queryBuilder->getQuery()->getResult();

    // Generate the Excel file
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set column headers
    $headers = ['Nom', 'Localisation', 'Type d\'Espace', 'État'];
    $columnLetters = ['A', 'B', 'C', 'D'];

    // Apply styles to headers
    $headerStyle = [
        'font' => ['bold' => true],
        'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER],
        'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'startColor' => ['rgb' => 'D3D3D3']],
        'borders' => ['allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN]],
    ];

    foreach ($headers as $index => $header) {
        $columnLetter = $columnLetters[$index];
        $sheet->setCellValue($columnLetter . '1', $header); // Set header value
        $sheet->getStyle($columnLetter . '1')->applyFromArray($headerStyle); // Apply header style
    }

    // Populate rows with data
    $row = 2;
    foreach ($espaces as $espace) {
        $sheet->setCellValue('A' . $row, $espace->getNom());
        $sheet->setCellValue('B' . $row, $espace->getLocalisation());
        $sheet->setCellValue('C' . $row, $espace->getTypeEspace()->getType());
        $sheet->setCellValue('D' . $row, $espace->getEtat());

        // Apply styles to data rows
        $dataStyle = [
            'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT],
            'borders' => ['allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN]],
        ];
        $sheet->getStyle('A' . $row . ':D' . $row)->applyFromArray($dataStyle);

        $row++;
    }

    // Set column widths for better spacing
    $sheet->getColumnDimension('A')->setWidth(30); // Nom
    $sheet->getColumnDimension('B')->setWidth(40); // Localisation
    $sheet->getColumnDimension('C')->setWidth(30); // Type d'Espace
    $sheet->getColumnDimension('D')->setWidth(20); // État

    // Center-align headers and add padding-like spacing
    $sheet->getStyle('A1:D1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

    // Create the Excel file in memory
    $writer = new Xlsx($spreadsheet);
    $filename = 'espaces_' . date('Y-m-d_H-i-s') . '.xlsx';

    // Prepare the response
    $response = new Response();
    $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    $response->headers->set('Content-Disposition', $response->headers->makeDisposition(
        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        $filename
    ));

    // Write the Excel file to the response output
    ob_start();
    $writer->save('php://output');
    $response->setContent(ob_get_clean());

    return $response;
}
    
#[Route('/admin/espace/list', name: 'admin_espace_list', methods: ['GET'])]
public function list(Request $request, EntityManagerInterface $entityManager): Response
{
    // Handle search functionality
    $searchTerm = $request->query->get('q');
    $repository = $entityManager->getRepository(Espace::class);

    // Number of items per page
    $itemsPerPage = 4;

    // Get the current page from the query parameter (default to 1)
    $currentPage = $request->query->getInt('page', 1);

    // Calculate the offset
    $offset = ($currentPage - 1) * $itemsPerPage;

    // Build the query dynamically
    $queryBuilder = $repository->createQueryBuilder('e');

    if ($searchTerm) {
        $queryBuilder->where('LOWER(e.nom) LIKE :searchTerm OR LOWER(e.localisation) LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . strtolower($searchTerm) . '%');
    }

    // Fetch total count of spaces
    $totalSpaces = count($queryBuilder->getQuery()->getResult());

    // Apply pagination limits
    $espaces = $queryBuilder
        ->setFirstResult($offset)
        ->setMaxResults($itemsPerPage)
        ->getQuery()
        ->getResult();

    // Calculate total pages
    $totalPages = ceil($totalSpaces / $itemsPerPage);

    return $this->render('Admin/Gestionespace/Liste.html.twig', [
        'espaces' => $espaces,
        'searchTerm' => $searchTerm,
        'currentPage' => $currentPage,
        'totalPages' => $totalPages,
    ]);
}

    
    #[Route('/admin/espace/create', name: 'admin_espace_create', methods: ['GET', 'POST'])]
public function create(Request $request, EntityManagerInterface $entityManager): Response
{
    // Create a new Espace object
    $espace = new Espace();

    // Create the form
    $form = $this->createForm(EspaceType::class, $espace);

    // Handle form submission
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Handle image upload
        $uploadedFile = $form->get('image')->getData();
        if ($uploadedFile) {
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);

            // Sanitize the filename (replace transliterator_transliterate)
            $safeFilename = $this->sanitizeFilename($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();

            try {
                $uploadedFile->move(
                    $this->getParameter('images_directory'), // Ensure this parameter exists in services.yaml
                    $newFilename
                );
            } catch (FileException $e) {
                $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
                return $this->redirectToRoute('admin_espace_create');
            }

            // Set the sanitized filename in the entity
            $espace->setImageUrl($newFilename);
        }

        // Save the new espace to the database
        $entityManager->persist($espace);
        $entityManager->flush();

        // Add a success message
        $this->addFlash('success', 'Espace créé avec succès !');

        // Redirect to the list of espaces
        return $this->redirectToRoute('admin_espace_list');
    }

    // Render the form
    return $this->render('Admin/Gestionespace/Ajoutespace.html.twig', [
        'form' => $form->createView(),
    ]);
}

/**
 * Helper function to sanitize filenames.
 */
private function sanitizeFilename(string $filename): string
{
    // Remove special characters and replace spaces with hyphens
    $sanitized = preg_replace('/[^a-zA-Z0-9\-\._]/', '', str_replace(' ', '-', $filename));
    return strtolower($sanitized);
}

    
#[Route('/admin/espace/edit/{id}', name: 'admin_espace_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, EntityManagerInterface $entityManager, int $id): Response
{
    // Fetch the Espace entity by ID
    $espace = $entityManager->getRepository(Espace::class)->find($id);

    if (!$espace) {
        throw $this->createNotFoundException('L\'espace avec l\'ID ' . $id . ' n\'existe pas.');
    }

    // Create the form for editing the Espace entity
    $form = $this->createForm(EspaceType::class, $espace);

    // Handle form submission
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        // Handle image upload if provided
        $uploadedFile = $form->get('image')->getData();
        if ($uploadedFile) {
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);

            // Sanitize the filename (replace transliterator_transliterate)
            $safeFilename = $this->sanitizeFilename($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();

            try {
                $uploadedFile->move(
                    $this->getParameter('images_directory'), // Ensure this parameter exists in services.yaml
                    $newFilename
                );
            } catch (FileException $e) {
                $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
                return $this->redirectToRoute('admin_espace_edit', ['id' => $id]);
            }

            // Delete the old image if it exists
            if ($espace->getImageUrl()) {
                $oldImagePath = $this->getParameter('images_directory') . '/' . $espace->getImageUrl();
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Set the sanitized filename in the entity
            $espace->setImageUrl($newFilename);
        }

        // Save the updated Espace entity to the database
        $entityManager->flush();

        // Add a success message
        $this->addFlash('success', 'Espace mis à jour avec succès !');

        // Redirect to the list of espaces
        return $this->redirectToRoute('admin_espace_list');
    }

    // Render the edit form with the Espace entity
    return $this->render('Admin/Gestionespace/EditEspace.html.twig', [
        'form' => $form->createView(),
        'espace' => $espace,
    ]);
}    
    #[Route('/admin/espace/delete/{id}', name: 'admin_espace_delete', methods: ['POST'])]
    public function delete(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        // Find the Espace entity by ID
        $espace = $entityManager->getRepository(Espace::class)->find($id);

        if (!$espace) {
            throw $this->createNotFoundException('L\'espace avec l\'ID ' . $id . ' n\'existe pas.');
        }

        // Validate CSRF token for security
        $submittedToken = $request->request->get('_token');
        if ($this->isCsrfTokenValid('delete' . $espace->getId(), $submittedToken)) {
            // Delete the associated image file if it exists
            if ($espace->getImageUrl()) {
                $imagePath = $this->getParameter('images_directory') . '/' . $espace->getImageUrl();
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Remove the Espace entity from the database
            $entityManager->remove($espace);
            $entityManager->flush();

            // Add a success message
            $this->addFlash('success', 'Espace supprimé avec succès !');
        }

        // Redirect to the list of espaces
        return $this->redirectToRoute('admin_espace_list');
    }
}