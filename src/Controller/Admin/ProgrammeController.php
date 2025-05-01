<?php

namespace App\Controller\Admin;

use App\Entity\Programme;
use App\Entity\Evenement;
use App\Form\ProgrammeType;
use App\Repository\ProgrammeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

#[Route('/admin/programme')]
class ProgrammeController extends AbstractController
{
    #[Route('/liste/{id}', name: 'admin_programme_liste', methods: ['GET'])]
    public function listeProgrammes(Evenement $evenement, ProgrammeRepository $programmeRepository): Response
    {
        $programmes = $programmeRepository->findBy(
            ['evenement' => $evenement],
            ['heureDebut' => 'ASC']
        );
        
        return $this->render('/Admin/Gestionevenement/Listeprogramme.html.twig', [
            'evenement' => $evenement,
            'programmes' => $programmes,
        ]);
    }

    #[Route('/new/{eventId}', name: 'admin_programme_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        int $eventId
    ): Response {
        $evenement = $entityManager->getRepository(Evenement::class)->find($eventId);
        
        if (!$evenement) {
            throw $this->createNotFoundException('Événement non trouvé');
        }

        $programme = new Programme();
        $programme->setEvenement($evenement);
        
        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($programme);
            $entityManager->flush();

            $this->addFlash('success', 'Programme ajouté avec succès');
            return $this->redirectToRoute('admin_programme_liste', ['id' => $eventId]);
        }

        return $this->render('/Admin/Gestionevenement/Ajoutprogramme.html.twig', [
            'form' => $form->createView(),
            'evenement' => $evenement,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_programme_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Programme $programme,
        EntityManagerInterface $entityManager
    ): Response {
        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Programme mis à jour avec succès');
            return $this->redirectToRoute('admin_programme_liste', [
                'id' => $programme->getEvenement()->getId()
            ]);
        }

        return $this->render('/Admin/Gestionevenement/Modifprogramme.html.twig', [
            'form' => $form->createView(),
            'programme' => $programme,
            'evenement' => $programme->getEvenement(),
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_programme_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Programme $programme,
        EntityManagerInterface $entityManager
    ): Response {
        $eventId = $programme->getEvenement()->getId();
        
        if ($this->isCsrfTokenValid('delete'.$programme->getId(), $request->request->get('_token'))) {
            $entityManager->remove($programme);
            $entityManager->flush();
            $this->addFlash('success', 'Programme supprimé avec succès');
        }

        return $this->redirectToRoute('admin_programme_liste', ['id' => $eventId]);
    }
    #[Route('/admin/programme/{id}/pdf', name: 'admin_programme_pdf')]
    public function generatePdf(Evenement $evenement, ProgrammeRepository $programmeRepository): Response
    {
        $programmes = $programmeRepository->findBy(['evenement' => $evenement], ['heureDebut' => 'ASC']);
    
        $html = $this->renderView('Admin/Gestionevenement/programme_pdf.html.twig', [
            'evenement' => $evenement,
            'programmes' => $programmes
        ]);
    
        $options = new Options();
        $options->set('defaultFont', 'Helvetica');
        
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        $filename = sprintf('programme-%s.pdf', $evenement->getId());
    
        return new Response(
            $dompdf->output(),
            Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => sprintf('inline; filename="%s"', $filename)
            ]
        );
    }
    
}