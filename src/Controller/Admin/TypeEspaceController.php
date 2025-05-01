<?php

namespace App\Controller\Admin;

use App\Entity\TypeEspace;
use App\Form\TypeEspaceType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeEspaceController extends AbstractController
{
    #[Route('/admin/type/list', name: 'app_type_espace_list')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        // Fetch all type_espaces from the database
        $typeEspaces = $entityManager->getRepository(TypeEspace::class)->findAll();

        // Render the list of type_espaces
        return $this->render('Admin/GestionEspace/Listetype.html.twig', [
            'typeEspaces' => $typeEspaces,
        ]);
    }

    #[Route('/admin/type/create', name: 'app_type_espace_create')]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Create a new TypeEspace object
        $typeEspace = new TypeEspace();

        // Create the form
        $form = $this->createForm(TypeEspaceType::class, $typeEspace);

        // Handle form submission
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Save the new type_espace to the database
            $entityManager->persist($typeEspace);
            $entityManager->flush();

            // Add a success message
            $this->addFlash('success', 'TypeEspace created successfully!');

            // Redirect to the list of type_espaces or another route
            return $this->redirectToRoute('app_type_espace_list');
        }

        // Render the form
        return $this->render('Admin/GestionEspace/AjoutType.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/type/edit/{id}', name: 'app_type_espace_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        // Find the TypeEspace entity by ID
        $typeEspace = $entityManager->getRepository(TypeEspace::class)->find($id);

        if (!$typeEspace) {
            throw $this->createNotFoundException('The TypeEspace with id ' . $id . ' does not exist.');
        }

        // Create the form
        $form = $this->createForm(TypeEspaceType::class, $typeEspace);

        // Handle form submission
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Save the updated type_espace to the database
            $entityManager->flush();

            // Add a success message
            $this->addFlash('success', 'TypeEspace updated successfully!');

            // Redirect to the list of type_espaces
            return $this->redirectToRoute('app_type_espace_list');
        }

        // Render the edit form
        return $this->render('Admin/GestionEspace/EditType.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/type/delete/{id}', name: 'app_type_espace_delete', methods: ['POST'])]
    public function delete(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        // Find the TypeEspace entity by ID
        $typeEspace = $entityManager->getRepository(TypeEspace::class)->find($id);

        if (!$typeEspace) {
            throw $this->createNotFoundException('The TypeEspace with id ' . $id . ' does not exist.');
        }

        // Validate CSRF token for security
        $submittedToken = $request->request->get('_token');
        if ($this->isCsrfTokenValid('delete' . $typeEspace->getId(), $submittedToken)) {
            // Remove the TypeEspace entity from the database
            $entityManager->remove($typeEspace);
            $entityManager->flush();

            // Add a success message
            $this->addFlash('success', 'TypeEspace deleted successfully!');
        }

        // Redirect to the list of type_espaces
        return $this->redirectToRoute('app_type_espace_list');
    }
}