<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Utilisateur;
class dashboardController extends AbstractController
{

    
    #[Route('/admin', name: 'admin_dashboard')]
    public function index(EntityManagerInterface $em, SessionInterface $session): Response
    {
        $userId = $session->get('user_id');
        $user = $em->getRepository(Utilisateur::class)->find($userId);
        return $this->render('Admin/dashboard.html.twig', [
            'user' => $user,
            'stats' => [
                'total_events' => 24,
                'total_users' => 156,
                'new_feedbacks' => 12,
            ]
        ]);
    }
}
