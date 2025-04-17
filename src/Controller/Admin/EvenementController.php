<?php

namespace App\Controller\Admin;

use App\Entity\Evenement;
use App\Form\EvenementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\EvenementRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Psr\Log\LoggerInterface;

class EvenementController extends AbstractController
{
    #[Route('/admin/evenements', name: 'admin_evenement_liste')]
    public function liste(Request $request, EvenementRepository $evenementRepository): Response
    {
        $searchTerm = $request->query->get('q');
        
        $evenements = $evenementRepository->search($searchTerm);
    
        return $this->render('/Admin/Gestionevenement/Listevenement.html.twig', [
            'evenements' => $evenements,
            'searchTerm' => $searchTerm
        ]);
    }
    #[Route('/admin/evenement/ajouter', name: 'admin_evenement_ajouter')]
public function ajouter(
    Request $request,
    EntityManagerInterface $em,
    SluggerInterface $slugger,
    LoggerInterface $logger
): Response
{
    $evenement = new Evenement();
    $form = $this->createForm(EvenementType::class, $evenement);

    $form->handleRequest($request);

    if ($form->isSubmitted()) {
        if ($form->isValid()) {
            try {
                // Gestion de l'image
                $imageFile = $form->get('image')->getData();
                
                if ($imageFile) {
                    $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $evenement->setImage($newFilename);
                }

                // Validation métier supplémentaire
                if ($evenement->getPrix() > 1000) {
                    throw new \Exception('Le prix maximum est de 1000 TND');
                }

                $em->persist($evenement);
                $em->flush();

                $this->addFlash('success', 'Événement créé avec succès !');
                return $this->redirectToRoute('admin_evenement_liste');

            } catch (\Exception $e) {
                $logger->error('Erreur création événement : '.$e->getMessage());
                $this->addFlash('error', $e->getMessage());
            }
        } else {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }
    }

    return $this->render('Admin/Gestionevenement/Ajoutevenement.html.twig', [
        'form' => $form->createView(),
    ]);
}

    #[Route('/admin/evenement/{id}/edit', name: 'admin_evenement_edit')]
    public function edit(Evenement $evenement, Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'image
            $imageFile = $form->get('image')->getData();
            
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
                
                // Suppression de l'ancienne image si elle existe
                if ($evenement->getImage()) {
                    $oldImage = $this->getParameter('images_directory').'/'.$evenement->getImage();
                    if (file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }
                
                $evenement->setImage($newFilename);
            }

            $em->flush();

            $this->addFlash('success', 'Événement mis à jour avec succès !');
            return $this->redirectToRoute('admin_evenement_liste');
        }

        return $this->render('/Admin/Gestionevenement/Modifevenement.html.twig', [
            'form' => $form->createView(),
            'evenement' => $evenement,
        ]);
    }

    #[Route('/admin/evenement/{id}', name: 'admin_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            // Suppression de l'image associée
            if ($evenement->getImage()) {
                $imagePath = $this->getParameter('images_directory').'/'.$evenement->getImage();
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $em->remove($evenement);
            $em->flush();
            
            $this->addFlash('success', 'Événement supprimé avec succès !');
        }

        return $this->redirectToRoute('admin_evenement_liste');
    }
   
}