<?php

namespace App\Controller\Front;

use App\Enum\Role;
use App\Entity\Reservation;
use App\Entity\Evenement;
use App\Entity\Utilisateur;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    #[Route('/event/{id}', name: 'event_show')]
    public function showEvent(
        Evenement $event,
        EntityManagerInterface $em,
        RequestStack $requestStack
    ): Response {
        $session = $requestStack->getSession();
        $user = $this->getCustomUser($em, $session);

        return $this->render('Front/event_show.html.twig', [
            'event' => $event,
            'user' => $user,
           
        ]);
    }

    #[Route('/event/{id}/book', name: 'event_book')]
    public function bookEvent(
        Request $request,
        Evenement $event,
        EntityManagerInterface $em,
        EmailService $emailService,
        RequestStack $requestStack
    ): Response {
        $session = $requestStack->getSession();
        $user = $this->getCustomUser($em, $session);
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Suppression de la redirection pour les organisateurs
        if ($request->isMethod('POST')) {
            $nombrePlaces = (int) $request->request->get('places');
            if ($nombrePlaces < 1) {
                throw new \Exception('Nombre de places invalide.');
            }

            $reservation = new Reservation();
            $reservation->setIdEvenement($event->getId());
            $reservation->setIdUtilisateur($user->getId());
            $reservation->setEmail($user->getEmail());
            $reservation->setNombrePlaces($nombrePlaces);
            $reservation->setDateReservation(new \DateTime());

            $em->persist($reservation);
            $em->flush();

            try {
                $emailService->sendReservationConfirmation(
                    $user->getEmail(),
                    $event->getTitre(),
                    $event->getDate()->format('d/m/Y H:i'),
                    $event->getTitre(),
                    $nombrePlaces,
                    $nombrePlaces * $event->getPrix()
                );
                $successMsg = 'Réservation et email confirmés';
            } catch (\Exception $e) {
                $successMsg = 'Réservation confirmée (problème d\'envoi d\'email)';
            }

            return $this->json([
                'success' => true,
                'message' => $successMsg,
                'total' => $nombrePlaces * $event->getPrix(),
            ]);
        }

        return $this->render('Front/book_modal.html.twig', [
            'event' => $event,
            'user' => $user,
        ]);
    }

    private function getCustomUser(EntityManagerInterface $em, SessionInterface $session): ?Utilisateur
    {
        $userId = $session->get('user_id');
        return $userId
            ? $em->getRepository(Utilisateur::class)->find($userId)
            : null;
    }
}