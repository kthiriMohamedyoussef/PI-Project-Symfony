<?php

namespace App\Controller\Front;

use App\Entity\Evenement;
use App\Repository\EvenementRepository;
use App\Repository\ProgrammeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
    public function show(Evenement $event, ProgrammeRepository $programmeRepository): Response
    {
        $programmes = $programmeRepository->findBy(['evenement' => $event], ['heureDebut' => 'ASC']);
        
        return $this->render('Front/aboutEvent.html.twig', [
            'event' => $event,
            'programmes' => $programmes
        ]);
    }
}