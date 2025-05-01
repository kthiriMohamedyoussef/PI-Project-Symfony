<?php

namespace App\Controller\Front;

use App\Entity\Utilisateur;
use App\Repository\EspaceRepository;
use App\Repository\EvenementRepository;
use App\Repository\FeedbackRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class aboutController extends AbstractController
{
    /**
     * Récupère l'utilisateur connecté depuis la session, identique à homeController et eventsController.
     */
    public function getCustomUser(EntityManagerInterface $em, SessionInterface $session): ?Utilisateur
    {
        $userId = $session->get('user_id');
        return $userId
            ? $em->getRepository(Utilisateur::class)->find($userId)
            : null;
    }

    #[Route('/about', name: 'app_about')]
    public function index(EntityManagerInterface $em, RequestStack $requestStack): Response
    {
        $session = $requestStack->getSession();
        $user    = $this->getCustomUser($em, $session);

        return $this->render('Front/about.html.twig', [
            'page_title'          => 'this is about page',
            'positivePercentage'  => 0,
            'user'                => $user,
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
        $query = $em->createQuery('SELECT COUNT(u.id) FROM App\\Entity\\Utilisateur u');
        $count = $query->getSingleScalarResult();

        return new JsonResponse([
            'userCount' => (int) $count
        ]);
    }

    #[Route('/about/material-count', name: 'api_material_count', methods: ['GET'])]
    public function getMaterialCount(EntityManagerInterface $em): JsonResponse
    {
        $query = $em->createQuery('SELECT COUNT(m.id) FROM App\\Entity\\Materiel m');
        $count = $query->getSingleScalarResult();

        return new JsonResponse([
            'materialCount' => (int) $count
        ]);
    }
}
