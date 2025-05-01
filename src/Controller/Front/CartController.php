<?php

namespace App\Controller\Front;

use App\Entity\Materiel;
use App\Entity\TypeMateriel;
use App\Entity\Panier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/front/gestionmateriel/cart')]

class CartController extends AbstractController
{
    #[Route('/add/{id}', name: 'front_gestionmateriel_cart_add')]
    public function addToCart(int $id, EntityManagerInterface $entityManager, Request $request): Response
    {
        // Fetch the material by ID
        $material = $entityManager->getRepository(Materiel::class)->find($id);
        if (!$material) {
            throw $this->createNotFoundException('Material not found');
        }

        // Get the cart from the session or create a new one
        $session = $request->getSession();
        $cart = $session->get('cart', []);

        // Add the material to the cart
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1; // Increment quantity if already in cart
        } else {
            $cart[$id] = [
                'material' => $material,
                'quantity' => 1,
            ];
        }

        // Save the updated cart in the session
        $session->set('cart', $cart);

        // Redirect back to the materials page
        return $this->redirectToRoute('front_gestionmateriel_reservation_materiel_index');
    }

    #[Route('/', name: 'front_gestionmateriel_cart_view')]
public function viewCart(Request $request, EntityManagerInterface $entityManager): Response
{
    // Get the cart from the session
    $cart = $request->getSession()->get('cart', []);

    // Fetch all material types from the database
    $typeMateriels = $entityManager->getRepository(TypeMateriel::class)->findAll();

    // Map material type IDs to their names
    $typeMaterielNames = [];
    foreach ($typeMateriels as $typeMateriel) {
        $typeMaterielNames[$typeMateriel->getId()] = $typeMateriel->getNomm(); // Adjust based on your entity field name
    }

    // Render the cart page
    return $this->render('front/cart.html.twig', [
        'cart' => $cart,
        'typeMaterielNames' => $typeMaterielNames, // Pass the mapping to the template
    ]);
}

#[Route('/submit', name: 'front_gestionmateriel_cart_submit')]
    public function submitCart(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Get the cart from the session
        $cart = $request->getSession()->get('cart', []);

        if (empty($cart)) {
            $this->addFlash('error', 'Your cart is empty.');
            return $this->redirectToRoute('front_gestionmateriel_reservation_materiel_index');
        }

        // Process the cart and save it to the Panier table
        foreach ($cart as $item) {
            $panier = new Panier();
            $panier->setUtilisateur($this->getUser()->getEmail()); // Assuming the user is logged in
            $panier->setDateDebut(new \DateTime()); // Set the start date
            $panier->setDateFin((new \DateTime())->modify('+7 days')); // Example: Reserve for 7 days
            $panier->setMaterielId($item['material']->getId());
            $entityManager->persist($panier);
        }

        // Save to the database
        $entityManager->flush();

        // Clear the cart
        $request->getSession()->remove('cart');

        $this->addFlash('success', 'Your reservation has been submitted successfully.');

        return $this->redirectToRoute('front_gestionmateriel_reservation_materiel_index');
    }
    #[Route('/remove/{id}', name: 'front_gestionmateriel_cart_remove')]
    public function removeFromCart(int $id, Request $request): Response
    {
        // Get the cart from the session
        $session = $request->getSession();
        $cart = $session->get('cart', []);

        // Remove the material with the given ID, if it exists
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        // Save the updated cart back to the session
        $session->set('cart', $cart);

        // Redirect back to the cart page
        return $this->redirectToRoute('front_gestionmateriel_cart_view');
    }

}