<?php

namespace App\Controller\Admin;

use App\Entity\Evenement;
use App\Entity\Utilisateur;
use App\Form\EvenementType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class EvenementController extends AbstractController
{
    #[Route('/admin/evenements', name: 'admin_evenement_liste')]
    public function liste(
        Request $request, 
        EvenementRepository $evenementRepository,
        SessionInterface $session,
        EntityManagerInterface $em
    ): Response {
        $user = $this->getUserFromSession($session, $em);
        $searchTerm = $request->query->get('q');
        
        $evenements = $evenementRepository->search($searchTerm);
    
        return $this->render('/Admin/Gestionevenement/Listevenement.html.twig', [
            'evenements' => $evenements,
            'searchTerm' => $searchTerm,
            'user' => $user
        ]);
    }

    #[Route('/admin/evenement/ajouter', name: 'admin_evenement_ajouter')]
    #[Route('/evenement/ajouter', name: 'front_evenement_ajouter')] 
    public function ajouter(
        Request $request,
        EntityManagerInterface $em,
        SluggerInterface $slugger,
        LoggerInterface $logger,
        SessionInterface $session
    ): Response {
        $user = $this->getUserFromSession($session, $em);
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

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

                    if ($evenement->getPrix() > 1000) {
                        throw new \Exception('Le prix maximum est de 1000 TND');
                    }

                

                    $em->persist($evenement);
                    $em->flush();

                    // Redirection différente selon le contexte
                    if ($request->attributes->get('_route') === 'front_evenement_ajouter') {
                        $this->addFlash('success', 'Votre événement a été créé avec succès !');
                        return $this->redirectToRoute('');
                    } else {
                        $this->addFlash('success', 'Événement créé avec succès !');
                        return $this->redirectToRoute('admin_evenement_liste');
                    }

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

        // Choix du template selon la route
        $template = $request->attributes->get('_route') === 'front_evenement_ajouter' 
            ? 'Front/AddEvent.html.twig' 
            : 'Admin/Gestionevenement/Ajoutevenement.html.twig';

        return $this->render($template, [
            'form' => $form->createView(),
            'is_front' => $request->attributes->get('_route') === 'front_evenement_ajouter',
            'user' => $user
        ]);
    }

    #[Route('/admin/evenement/{id}/edit', name: 'admin_evenement_edit')]
    public function edit(
        Evenement $evenement, 
        Request $request, 
        EntityManagerInterface $em, 
        SluggerInterface $slugger,
        SessionInterface $session
    ): Response {
        $user = $this->getUserFromSession($session, $em);
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

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
            'user' => $user
        ]);
    }

    #[Route('/admin/evenement/{id}', name: 'admin_evenement_delete', methods: ['POST'])]
    public function delete(
        Request $request, 
        Evenement $evenement, 
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        $user = $this->getUserFromSession($session, $em);
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

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

    #[Route('/admin/evenements/calendar', name: 'admin_evenement_calendar')]
    public function calendar(SessionInterface $session, EntityManagerInterface $em): Response
    {
        $user = $this->getUserFromSession($session, $em);
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('Admin/Gestionevenement/calendar.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/admin/api/evenements', name: 'admin_api_evenements', methods: ['GET'])]
    public function getEventsApi(EvenementRepository $repo): JsonResponse
    {
        $events = $repo->findAllForCalendar();
        
        $formattedEvents = array_map(function($event) {
            return [
                'id' => $event['id'],
                'title' => $event['title'],
                'start' => $event['start']->format('Y-m-d'),
                'color' => $this->getEventColor($event['statut']),
                'url' => $this->generateUrl('admin_evenement_edit', ['id' => $event['id']]),
                'extendedProps' => [
                    'prix' => $event['prix'],
                    'categorie' => $event['categorie']
                ]
            ];
        }, $events);

        return $this->json($formattedEvents);
    }

    private function getEventColor(?string $status): string
    {
        return match ($status) {
            'actif' => '#28a745', // Vert
            'inactif' => '#dc3545', // Rouge
            'brouillon' => '#6c757d', // Gris
            default => '#ffc107', // Jaune (par défaut)
        };
    }

    private function getUserFromSession(SessionInterface $session, EntityManagerInterface $em): ?Utilisateur
    {
        $userId = $session->get('user_id');
        return $userId
            ? $em->getRepository(Utilisateur::class)->find($userId)
            : null;
    }
}