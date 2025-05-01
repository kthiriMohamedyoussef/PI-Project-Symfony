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

class EspaceController extends AbstractController
{
    
    #[Route('/admin/espace/list', name: 'admin_espace_list', methods: ['GET'])]
    public function list(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Handle search functionality
        $searchTerm = $request->query->get('q');
        $repository = $entityManager->getRepository(Espace::class);

        if ($searchTerm) {
            $espaces = $repository->createQueryBuilder('e')
                ->where('LOWER(e.nom) LIKE :searchTerm OR LOWER(e.localisation) LIKE :searchTerm')
                ->setParameter('searchTerm', '%' . strtolower($searchTerm) . '%')
                ->getQuery()
                ->getResult();
        } else {
            $espaces = $repository->findAll();
        }

        return $this->render('Admin/Gestionespace/Liste.html.twig', [
            'espaces' => $espaces,
            'searchTerm' => $searchTerm,
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