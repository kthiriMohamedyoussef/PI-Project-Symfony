<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
<<<<<<< HEAD
use App\Entity\Espace; 
use Doctrine\ORM\EntityManagerInterface;

=======
use App\Entity\Espace;
use Doctrine\ORM\EntityManagerInterface;

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\HttpFoundation\JsonResponse;




>>>>>>> 923b300 (metiers API)
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
<<<<<<< HEAD
=======

    #[Route('/espace/{id}/qrcode', name: 'app_espace_qrcode', methods: ['GET'])]
    public function qrCode(Espace $espace, EntityManagerInterface $entityManager): JsonResponse
    {
        try {
            // Temporarily increase memory limit
            $originalMemoryLimit = ini_get('memory_limit');
            ini_set('memory_limit', '256M');

            // Get basic info about the espace
            $typeEspaceName = 'N/A';
            if ($espace->getTypeEspace()) {
                $typeEspaceName = $espace->getTypeEspace()->getType();
            }

            // Create simpler formatted text
            $formattedText = implode("\n", [
                "=== ESPACE INFORMATION ===",
                "Name:   " . $espace->getNom(),
                "Status: " . $espace->getEtat(),
                "Type:   " . $typeEspaceName,
                "Scanned: " . (new \DateTime())->format('Y-m-d H:i'),
                "========================"
            ]);

            // Generate QR code with lower memory usage
        $qrCode = new QrCode($formattedText);
        $qrCode->setSize(300); // Reduced from 300
        $qrCode->setMargin(10); // Reduced from 10

        $writer = new PngWriter();
        $result = $writer->write($qrCode);

            // Get the image data
            $imageData = $result->getString();
            $base64 = base64_encode($imageData);

            // Restore original memory limit
            ini_set('memory_limit', $originalMemoryLimit);

            return new JsonResponse([
                'qr_code' => 'data:image/png;base64,' . $base64
            ]);
        } catch (\Throwable $e) {
            // Restore memory limit in case of error
            isset($originalMemoryLimit) && ini_set('memory_limit', $originalMemoryLimit);

            return new JsonResponse([
                'error' => 'QR Generation Failed',
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
>>>>>>> 923b300 (metiers API)
}