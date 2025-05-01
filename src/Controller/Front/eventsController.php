<?php

namespace App\Controller\Front;

use App\Entity\Avis;
use App\Entity\Commentaire;
use App\Entity\Evenement;
use App\Entity\Utilisateur;
use App\Repository\EvenementRepository;
use App\Repository\ProgrammeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;

class eventsController extends AbstractController
{
    #[Route('/events', name: 'app_events')]
    public function index(EvenementRepository $evenementRepository): Response
    {
        $events = $evenementRepository->findBy([], ['date' => 'ASC']);

        return $this->render('Front/events.html.twig', [
            'events' => $events,
            'page_title' => 'Upcoming Events'
        ]);
    }

    #[Route('/events/search', name: 'event_search')]
    public function search(Request $request, EvenementRepository $evenementRepository): JsonResponse
    {
        $searchTerm = $request->query->get('q');
        $events = $evenementRepository->search($searchTerm);

        return $this->json(
            $events,
            context: ['groups' => ['event_search']]
        );
    }

    #[Route('/event/{id}', name: 'event_show')]
    public function show(Evenement $event, ProgrammeRepository $programmeRepository, EntityManagerInterface $em, RequestStack $requestStack): Response
    {
        $programmes = $programmeRepository->findBy(['evenement' => $event], ['heureDebut' => 'ASC']);
        $session = $requestStack->getSession();
        $session->set('idEvent', $event->getId());
        $user = $em->getRepository(Utilisateur::class)->find(2);
        if (!$user || !$event) {
            throw $this->createNotFoundException('User or Event not found');
        }
        $comments = $em->getRepository(Commentaire::class)->findBy([
            'evenement' => $event
        ], ['dateComment' => 'DESC']);
        $avis = $em->getRepository(Avis::class)->findOneBy([
            'utilisateur' => $user,
            'evenement' => $event,
        ]);
        $ratings = $em->getRepository(Avis::class)->findBy(['evenement' => $event]);
        $averageRating = 0;
        if ($ratings) {
            $total = array_reduce($ratings, fn($carry, $r) => $carry + $r->getNote(), 0);
            $averageRating = round($total / count($ratings), 1); // 1 decimal precision
        }

        return $this->render('Front/aboutEvent.html.twig', [
            'user' => $user,
            'event' => $event,
            'programmes' => $programmes,
            'existing_rating' => $avis ? $avis->getNote() : null,
            'comments' => $comments,
            'average_rating' => $averageRating,
        ]);
    }
}
