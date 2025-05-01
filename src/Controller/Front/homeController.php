<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;

final class homeController extends AbstractController
{

    public function getCustomUser(EntityManagerInterface $em, SessionInterface $session){
        $userId = $session->get('user_id');
        return $userId ? $em->getRepository(Utilisateur::class)->find($userId) : null;
    }
    #[Route('/home', name: 'app_home')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {


    $user = $this->getCustomUser($em, $request->getSession());
        return $this->render('Front/home.html.twig',[
            'user'=>$user,
        ]);
    }
}
