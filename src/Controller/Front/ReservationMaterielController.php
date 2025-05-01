<?php
namespace App\Controller\Front;

use App\Entity\Materiel;
use App\Entity\TypeMateriel; 
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/front/gestionmateriel/reservation/materiel')]

final class ReservationMaterielController extends AbstractController
{
    #[Route('/', name: 'front_gestionmateriel_reservation_materiel_index')]
    public function index(Request $request,EntityManagerInterface $entityManager): Response
    {
        // Fetch materials with 'DISPONIBLE' status
        $materiels = $entityManager->getRepository(Materiel::class)->findBy(['etat' => 'DISPONIBLE']);

        // Fetch all material types
        $typeMateriels = $entityManager->getRepository(TypeMateriel::class)->findAll();
        $cart = $request->getSession()->get('cart', []);
    
    // Calculate the total number of items in the cart
    $cartCount = array_sum(array_column($cart, 'quantity'));
        // Map material type IDs to their names
        $typeMaterielNames = [];
        foreach ($typeMateriels as $typeMateriel) {
            $typeMaterielNames[$typeMateriel->getId()] = $typeMateriel->getNomm();
        }

        // Render the template and pass materials and type names
        return $this->render('front/ReservationMateriel.html.twig', [
            'materiels' => $materiels,
            'typeMaterielNames' => $typeMaterielNames,
            'cartCount' => $cartCount,
        ]);
    }
}