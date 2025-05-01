<?php

namespace App\Controller\Admin;

use App\Entity\TypeMateriel;
use App\Form\TypeMaterielType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/admin/gestionmateriel/type/materiel')]
final class TypeMaterielController extends AbstractController{
    #[Route(name: 'app_type_materiel_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $typeMateriels = $entityManager
            ->getRepository(TypeMateriel::class)
            ->findAll();

        return $this->render('Admin/GestionMateriel/type_materiel/index.html.twig', [
            'type_materiels' => $typeMateriels,
        ]);
    }

    #[Route('/new', name:  'admin_gestionmateriel_type_materiel_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $typeMateriel = new TypeMateriel();
        $form = $this->createForm(TypeMaterielType::class, $typeMateriel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($typeMateriel);
            $entityManager->flush();

            return $this->redirectToRoute('app_type_materiel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Admin/GestionMateriel/type_materiel/new.html.twig', [
            'type_materiel' => $typeMateriel,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'admin_gestionmateriel_type_materiel_show', methods: ['GET'])]
    public function show(TypeMateriel $typeMateriel): Response
    {
        return $this->render('Admin/GestionMateriel/type_materiel/show.html.twig', [
            'type_materiel' => $typeMateriel,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_gestionmateriel_type_materiel_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypeMateriel $typeMateriel, EntityManagerInterface $entityManager): Response
    {
        // Create the edit form
        $form = $this->createForm(TypeMaterielType::class, $typeMateriel);
        $form->handleRequest($request);
    
        // Handle form submission
        if ($form->isSubmitted() && $form->isValid()) {
            // No need to persist (the entity is already managed)
            $entityManager->flush();
            
            // Add success message
            $this->addFlash('success', 'Material type updated successfully!');
            
            // Redirect to index
            return $this->redirectToRoute('app_type_materiel_index');
        }
    
        // Render the form
        return $this->render('Admin/GestionMateriel/type_materiel/edit.html.twig', [
            'type_materiel' => $typeMateriel,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'admin_gestionmateriel_type_materiel_delete', methods: ['POST'])]
    public function delete(Request $request, TypeMateriel $typeMateriel, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeMateriel->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($typeMateriel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_gestionmateriel_type_materiel_index', [], Response::HTTP_SEE_OTHER);
    }
}
