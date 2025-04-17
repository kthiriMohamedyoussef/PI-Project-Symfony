<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class aboutController extends AbstractController
{
    #[Route('/about', name: 'app_about')]
    public function index(): Response
    {


        return $this->render('Front/about.html.twig', [
            'page_title' => 'this is about page',
        ]);
    }
}
