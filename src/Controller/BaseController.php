<?php
namespace App\Controller;
use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

abstract class BaseController extends AbstractController
{
    protected function getCurrentUser(EntityManagerInterface $em, SessionInterface $session): ?Utilisateur
    {
        $userId = $session->get('user_id');
        return $userId ? $em->getRepository(Utilisateur::class)->find($userId) : null;
    }
}