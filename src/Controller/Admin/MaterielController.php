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

    #[Route('/{id}', name: 'admin_gestionmateriel_show', methods: ['GET'])]
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

  // src/Controller/MaterielController.php

#[Route('/{id}/edit', name: 'admin_gestionmateriel_edit', methods: ['GET', 'POST'])]
public function edit(
    Request $request, 
    Materiel $materiel, 
    EntityManagerInterface $entityManager, 
    FileUp $fileUploader, 
    SluggerInterface $slugger
): Response {
    $form = $this->createForm(MaterielType::class, $materiel);
    $form->handleRequest($request);

    if ($form->isSubmitted()) {
        if ($form->isValid()) {
            // Handle typeMateriel relationship
            $typeMateriel = $form->get('typeMaterielId')->getData();
            if ($typeMateriel) {
                $materiel->setTypeMaterielId($typeMateriel->getId());
            }

            // Handle file upload
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                try {
                    // Delete old file if exists
                    if ($materiel->getImagePath()) {
                        $fileUploader->remove($materiel->getImagePath());
                    }
                    
                    $newFilename = $fileUploader->upload($imageFile, $slugger);
                    $materiel->setImagePath($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'An error occurred while uploading the image.');
                    // Continue processing even if upload fails
                }
            }

            // Ensure etat is not null before saving
            $etat = $form->get('etat')->getData();
            if ($etat === null) {
                $materiel->setEtat('available');  // Set default state
            }

            $entityManager->flush();
            $this->addFlash('success', 'Material updated successfully!');
            return $this->redirectToRoute('admin_gestionmateriel_index', [], Response::HTTP_SEE_OTHER);
        }
        // If form is invalid, we'll just render the form again with errors
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
}