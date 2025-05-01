<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Espace;
use App\Entity\Evenement;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


class EspacesController extends AbstractController
{
    #[Route('/espaces', name: 'app_espaces')]
    public function list(
        EntityManagerInterface $entityManager,
        SessionInterface $session,
        Request $request
    ): Response {
        $user = $this->getUserFromSession($session, $entityManager);
        $eventId = $request->query->get('eventId');
        
        // Pagination setup
        $itemsPerPage = 4;
        $currentPage = $request->query->getInt('page', 1);
        $offset = ($currentPage - 1) * $itemsPerPage;
        
        // Get total count of spaces
        $totalSpaces = $entityManager->getRepository(Espace::class)->count([]);
        
        // Fetch paginated results
        $espaces = $entityManager->getRepository(Espace::class)
            ->createQueryBuilder('e')
            ->setFirstResult($offset)
            ->setMaxResults($itemsPerPage)
            ->getQuery()
            ->getResult();
        
        $totalPages = ceil($totalSpaces / $itemsPerPage);
    
        return $this->render('Front/Espaces.html.twig', [
            'espaces' => $espaces,
            'user' => $user,
            'eventId' => $eventId,  // Make sure this is passed to the template
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
        ]);
    }

    #[Route('/espace/{id}', name: 'app_espace_details')]
    public function details(
        int $id, 
        EntityManagerInterface $entityManager,
        SessionInterface $session,
        Request $request
    ): Response
    {
        $user = $this->getUserFromSession($session, $entityManager);
        $espace = $entityManager->getRepository(Espace::class)->find($id);
        $eventId = $request->query->get('eventId');

        if (!$espace) {
            throw $this->createNotFoundException('L\'espace n\'existe pas.');
        }

        return $this->render('Front/Details.html.twig', [
            'espace' => $espace,
            'user' => $user,
            'eventId' => $eventId
        ]);
    }
    #[Route('/espace/{id}/qrcode', name: 'app_espace_qrcode', methods: ['GET'])]
    public function qrcode(Espace $espace): JsonResponse
    {
        try {
            $typeEspaceName = $espace->getTypeEspace() ? $espace->getTypeEspace()->getType() : 'N/A';
            
            $qrContent = sprintf(
                "=== ESPACE INFORMATION ===\n" .
                "Nom: %s\n" .
                "Localisation: %s\n" .
                "Type: %s\n" .
                "État: %s\n" .
                "Scanné le: %s\n" .
                $espace->getNom(),
                $espace->getLocalisation(),
                $typeEspaceName,
                $espace->getEtat(),
                (new \DateTime())->format('d/m/Y H:i'),
                $this->generateUrl('app_espace_details', ['id' => $espace->getId()], UrlGeneratorInterface::ABSOLUTE_URL)
            );
        
            $builder = new Builder(
                new PngWriter(),
                [],
                false,
                $qrContent,
                new Encoding('UTF-8'),
                ErrorCorrectionLevel::High,
                300,
                10,
                RoundBlockSizeMode::Margin
            );
        
            $result = $builder->build();
            
            // Convert the image to base64 for easy display in frontend
            $qrCodeBase64 = base64_encode($result->getString());
            
            return $this->json([
                'success' => true,
                'qr_code' => 'data:image/png;base64,' . $qrCodeBase64
            ]);
            
        } catch (\Exception $e) {
            return $this->json([
                'success' => false,
                'message' => 'Error generating QR code: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    

    #[Route('/reserve/{espaceId}', name: 'app_reserve_espace')]
public function reserveEspace(
    int $espaceId,
    EntityManagerInterface $entityManager,
    SessionInterface $session,
    Request $request
): Response
{
    $user = $this->getUserFromSession($session, $entityManager);
    if (!$user) {
        $this->addFlash('error', 'Vous devez être connecté pour réserver');
        return $this->redirectToRoute('app_login');
    }

    $eventId = $request->query->get('eventId');
    if (!$eventId) {
        $this->addFlash('error', 'Aucun événement spécifié pour la réservation');
        return $this->redirectToRoute('app_espaces');
    }

    $espace = $entityManager->getRepository(Espace::class)->find($espaceId);
    if (!$espace) {
        $this->addFlash('error', 'Espace non trouvé');
        return $this->redirectToRoute('app_espaces');
    }

    $evenement = $entityManager->getRepository(Evenement::class)->find($eventId);
    if (!$evenement) {
        $this->addFlash('error', 'Événement non trouvé');
        return $this->redirectToRoute('app_espaces');
    }

    // Vérifier que l'espace est disponible
    if ($espace->getEtat() !== 'DISPONIBLE') {
        $this->addFlash('error', 'Cet espace n\'est pas disponible');
        return $this->redirectToRoute('app_espaces');
    }

    // Associer l'espace à l'événement
    $evenement->setEspace($espace);
    $espace->setEtat('Reserver');

    try {
        $entityManager->persist($evenement);
        $entityManager->flush();
        $this->addFlash('success', 'Espace réservé avec succès pour votre événement');
        return $this->redirectToRoute('Front/aboutEvent.html.twig', ['id' => $eventId]);
    } catch (\Exception $e) {
        $this->addFlash('error', 'Erreur lors de la réservation: ' . $e->getMessage());
        return $this->redirectToRoute('app_espaces');
    }
}
    private function getUserFromSession(SessionInterface $session, EntityManagerInterface $em): ?Utilisateur
    {
        $userId = $session->get('user_id');
        return $userId
            ? $em->getRepository(Utilisateur::class)->find($userId)
            : null;
    }

}