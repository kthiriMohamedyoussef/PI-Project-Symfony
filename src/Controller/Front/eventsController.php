<?php

namespace App\Controller\Front;

use App\Entity\Utilisateur;
use App\Entity\Avis;
use App\Entity\Commentaire;
use App\Entity\Evenement;
use App\Repository\EvenementRepository;
use App\Repository\ProgrammeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;




class eventsController extends AbstractController
{
    
    public function getCustomUser(EntityManagerInterface $em, SessionInterface $session): ?Utilisateur
    {
        $userId = $session->get('user_id');
        return $userId
            ? $em->getRepository(Utilisateur::class)->find($userId)
            : null;
    }

    #[Route('/events', name: 'app_events')]
    public function index(
        EntityManagerInterface $em,
        RequestStack $requestStack,
        EvenementRepository $evenementRepository
    ): Response {
        $session = $requestStack->getSession();
        $user    = $this->getCustomUser($em, $session);

        $events = $evenementRepository->findBy([], ['date' => 'ASC']);

        return $this->render('Front/events.html.twig', [
            'events'     => $events,
            'page_title' => 'Upcoming Events',
            'user'       => $user,
        ]);
    }

    #[Route('/events/search', name: 'event_search')]
    public function search(
        Request $request,
        EvenementRepository $evenementRepository
    ): JsonResponse {
        $searchTerm = $request->query->get('q');
        $events     = $evenementRepository->search($searchTerm);

        return $this->json(
            $events,
            context: ['groups' => ['event_search']]
        );
    }

    #[Route('/event/{id}', name: 'event_show')]
    public function show(
        Evenement $event,
        EntityManagerInterface $em,
        RequestStack $requestStack,
        ProgrammeRepository $programmeRepository
    ): Response {
        $session   = $requestStack->getSession();
        $user      = $this->getCustomUser($em, $session);
        $programmes = $programmeRepository->findBy(
            ['evenement' => $event],
            ['heureDebut' => 'ASC']
        );

        // On garde ta logique de session idEvent
        $session->set('idEvent', $event->getId());

        $comments = $em->getRepository(Commentaire::class)->findBy(
            ['evenement' => $event],
            ['dateComment' => 'DESC']
        );

        $avis = null;
        if ($user) {
            $avis = $em->getRepository(Avis::class)->findOneBy([
                'utilisateur' => $user,
                'evenement'   => $event,
            ]);
        }

        $ratings = $em->getRepository(Avis::class)->findBy([
            'evenement' => $event
        ]);
        $averageRating = 0;
        if ($ratings) {
            $total         = array_reduce($ratings, fn($carry, $r) => $carry + $r->getNote(), 0);
            $averageRating = round($total / count($ratings), 1);
        }

        return $this->render('Front/aboutEvent.html.twig', [
            'user'            => $user,
            'event'           => $event,
            'programmes'      => $programmes,
            'existing_rating' => $avis ? $avis->getNote() : null,
            'comments'        => $comments,
            'average_rating'  => $averageRating,
        ]);
    }
    #[Route('/event/{id}/qrcode', name: 'event_qrcode')]
public function generateQrCode(Evenement $event): Response
{
    // 1) Contenu du QR code
    $qrContent = sprintf(
        "Événement: %s\nDate: %s\nLieu: %s\nPrix: %s TND\nURL: %s",
        $event->getTitre(),
        $event->getDate()->format('d/m/Y H:i'),
        $event->getEspace()->getNom(),
        $event->getPrix(),
        $this->generateUrl('event_show', ['id' => $event->getId()], UrlGeneratorInterface::ABSOLUTE_URL)
    );

    // 2) Configuration du Builder
    $builder = new Builder(
        writer: new PngWriter(),
        writerOptions: [],                         // options PNG (compression, etc.)
        validateResult: false,                     // désactive la validation par défaut
        data: $qrContent,                          // données à encoder
        encoding: new Encoding('UTF-8'),           // encodage
        errorCorrectionLevel: ErrorCorrectionLevel::High, // niveau de correction d’erreur :contentReference[oaicite:0]{index=0}
        size: 300,                                 // taille du code
        margin: 10,                                // marge autour
        roundBlockSizeMode: RoundBlockSizeMode::Margin    // gestion du “pixel perfect” :contentReference[oaicite:1]{index=1}
    );

    // 3) Génération et renvoi
    $result = $builder->build();
    return new Response(
        $result->getString(),
        Response::HTTP_OK,
        ['Content-Type' => $result->getMimeType()]
    );
}
}
