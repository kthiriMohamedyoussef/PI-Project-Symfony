<?php

namespace App\Controller\Front;

use App\Entity\Materiel;
use App\Entity\TypeMateriel;
use App\Entity\Panier;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/front/gestionmateriel/cart')]
class CartController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/add/{id}', name: 'front_gestionmateriel_cart_add')]
    public function addToCart(
        int $id, 
        Request $request, 
        SessionInterface $session
    ): Response {
        $user = $this->getUserFromSession($session);
        if (!$user) {
            $this->addFlash('error', 'You must be logged in to add items to cart');
            return $this->redirectToRoute('app_login');
        }

        $material = $this->entityManager->getRepository(Materiel::class)->find($id);
        if (!$material) {
            throw $this->createNotFoundException('Material not found');
        }

        $dateDebut = $request->query->get('dateStart') ?? $session->get('reservation_date_start');
        $dateFin = $request->query->get('dateEnd') ?? $session->get('reservation_date_end');

        if (!$dateDebut || !$dateFin) {
            $this->addFlash('error', 'Please select reservation dates.');
            return $this->redirectToRoute('front_gestionmateriel_reservation_materiel_index');
        }

        $session->set('reservation_date_start', $dateDebut);
        $session->set('reservation_date_end', $dateFin);

        $cart = $session->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                'material' => $material,
                'quantity' => 1,
                'dateStart' => $dateDebut,
                'dateEnd' => $dateFin,
            ];
        }
          // Stocker l'ID événement dans la session si présent
        if ($eventId = $request->query->get('eventId')) {
        $session->set('current_event_id', $eventId);
    }

        $session->set('cart', $cart);
        $this->addFlash('success', 'Material added to cart successfully.');
        return $this->redirectToRoute('front_gestionmateriel_reservation_materiel_index');
    }

    #[Route('/', name: 'front_gestionmateriel_cart_view')]
    public function viewCart(
        Request $request,
        SessionInterface $session
    ): Response {
        $user = $this->getUserFromSession($session);
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $cart = $session->get('cart', []);
        $typeMateriels = $this->entityManager->getRepository(TypeMateriel::class)->findAll();

        $typeMaterielNames = [];
        foreach ($typeMateriels as $typeMateriel) {
            $typeMaterielNames[$typeMateriel->getId()] = $typeMateriel->getNomm();
        }

        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['material']->getPrix() * $item['quantity'];
        }

        return $this->render('front/cart.html.twig', [
            'cart' => $cart,
            'totalPrice' => $totalPrice,
            'typeMaterielNames' => $typeMaterielNames,
            'forInvoice' => false,
            'user' => $user
        ]);
    }

    
    #[Route('/submit', name: 'front_gestionmateriel_cart_submit')]
public function submitCart(
    Request $request,
    SessionInterface $session
): Response {
    $user = $this->getUserFromSession($session);
    if (!$user) {
        return $this->redirectToRoute('app_login');
    }

    $cart = $session->get('cart', []);
    if (empty($cart)) {
        $this->addFlash('error', 'Votre panier est vide.');
        return $this->redirectToRoute('front_gestionmateriel_cart_view');
    }

    // Récupération de l'ID événement depuis la session ou les paramètres
    $eventId = $request->query->get('eventId') ?? $session->get('current_event_id');
    
    if (!$eventId) {
        $this->addFlash('warning', 'Aucun événement associé à cette réservation.');
    }

    try {
        foreach ($cart as $item) {
            $panier = new Panier();
            $panier->setUtilisateur((string)$user->getId());
            $panier->setMaterielId($item['material']->getId());
            $panier->setDateDebut(new \DateTime($item['dateStart']));
            $panier->setDateFin(new \DateTime($item['dateEnd']));
            
            if ($eventId) {
                $panier->setIdEvenement((int)$eventId);
                $session->set('current_event_id', $eventId); // Sauvegarde en session
            }

            $this->entityManager->persist($panier);
        }

        $this->entityManager->flush();
        $session->remove('cart');
        $this->addFlash('success', 'Réservation enregistrée avec succès.');
    } catch (\Exception $e) {
        $this->addFlash('error', 'Erreur: ' . $e->getMessage());
    }

    return $this->redirectToRoute('front_gestionmateriel_reservation_materiel_index');
}

    #[Route('/remove/{id}', name: 'front_gestionmateriel_cart_remove')]
    public function removeFromCart(
        int $id, 
        Request $request,
        SessionInterface $session
    ): Response {
        $user = $this->getUserFromSession($session);
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $cart = $session->get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            $session->set('cart', $cart);
            $this->addFlash('success', 'Material removed from cart.');
        } else {
            $this->addFlash('error', 'Material not found in cart.');
        }

        return $this->redirectToRoute('front_gestionmateriel_cart_view');
    }
   
    #[Route('/invoice', name: 'front_gestionmateriel_cart_invoice')]
    public function generateInvoice(
        Request $request,
        SessionInterface $session
    ): Response {
        $user = $this->getUserFromSession($session);
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $cart = $session->get('cart', []);
        if (empty($cart)) {
            $this->addFlash('error', 'Your cart is empty. Cannot generate an invoice.');
            return $this->redirectToRoute('front_gestionmateriel_cart_view');
        }

        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item['material']->getPrix() * $item['quantity'];
        }

        $lastInvoiceNumber = $session->get('last_invoice_number', 0);
        $invoiceNumber = $lastInvoiceNumber + 1;
        $session->set('last_invoice_number', $invoiceNumber);
        $invoiceDate = (new \DateTime())->format('Y-m-d');

        $html = $this->renderView('front/cart.html.twig', [
            'cart' => $cart,
            'totalPrice' => $totalPrice,
            'invoiceNumber' => $invoiceNumber,
            'invoiceDate' => $invoiceDate,
            'forInvoice' => true,
            'user' => $user
        ]);

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="facture-' . $invoiceNumber . '.pdf"',
        ]);
    }

    private function getUserFromSession(SessionInterface $session): ?Utilisateur
    {
        $userId = $session->get('user_id');
        return $userId
            ? $this->entityManager->getRepository(Utilisateur::class)->find($userId)
            : null;
    }
}