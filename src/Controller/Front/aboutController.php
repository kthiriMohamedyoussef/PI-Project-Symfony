<?php

namespace App\Controller\Front;

use App\Repository\EspaceRepository;
use App\Repository\EvenementRepository;
use App\Repository\FeedbackRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class aboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(): Response
    {


        return $this->render('Front/about.html.twig', [
            'page_title' => 'this is about page',
            'positivePercentage' => 0,
        ]);
    }

    #[Route('/about/event-count', name: 'api_event_count', methods: ['GET'])]
    public function getEventCount(EvenementRepository $eventRepository): JsonResponse
    {
        $count = $eventRepository->count([]);
        return new JsonResponse([
            'eventCount' => $count
        ]);
    }

    #[Route('/about/space-count', name: 'api_space_count', methods: ['GET'])]
    public function getSpaceCount(EspaceRepository $ER): JsonResponse
    {
        $count = $ER->count([]);
        return new JsonResponse([
            'spaceCount' => $count
        ]);
    }
    #[Route('/about/user-count', name: 'api_user_count', methods: ['GET'])]
    public function getUserCount(EntityManagerInterface $em): JsonResponse
    {
        $query = $em->createQuery('SELECT COUNT(u.id) FROM App\Entity\Utilisateur u');
        $count = $query->getSingleScalarResult();

        return new JsonResponse([
            'userCount' => (int) $count
        ]);
    }
    #[Route('/about/material-count', name: 'api_material_count', methods: ['GET'])]
    public function getMaterialCount(EntityManagerInterface $em): JsonResponse
    {
        $query = $em->createQuery('SELECT COUNT(u.id) FROM App\Entity\Materiel u');
        $count = $query->getSingleScalarResult();

        return new JsonResponse([
            'materialCount' => (int) $count
        ]);
    }
}
