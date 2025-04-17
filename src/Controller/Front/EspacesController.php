<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Espace; 
use Doctrine\ORM\EntityManagerInterface;

class EspacesController extends AbstractController
{
    #[Route('/espaces', name: 'app_espaces')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        // Fetch all spaces from the database
        $espaces = $entityManager->getRepository(Espace::class)->findAll();

        return $this->render('Front/Espaces.html.twig', [
            'espaces' => $espaces,
        ]);
    }

    #[Route('/espace/{id}', name: 'app_espace_details')]
    public function details(int $id, EntityManagerInterface $entityManager): Response
    {
        // Fetch the specific space by ID
        $espace = $entityManager->getRepository(Espace::class)->find($id);

        if (!$espace) {
            throw $this->createNotFoundException('L\'espace n\'existe pas.');
        }

        return $this->render('Front/Details.html.twig', [
            'espace' => $espace,
        ]);
    }
}