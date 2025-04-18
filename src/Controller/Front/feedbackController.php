<?php

namespace App\Controller\Front;

use App\Entity\Feedback;
use App\Entity\Reply;
use App\Entity\Utilisateur;
use App\Repository\FeedbackRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class feedbackController extends AbstractController
{
    #[Route('/feedback', name: 'app_feedback')]
    public function index(FeedbackRepository $feedbackRepo): Response
    {
        $feedbacks = $feedbackRepo->findBy([]);
        return $this->render('Front/feedbacks.html.twig', [
            'feedbacks' => $feedbacks,
        ]);
    }

    #[Route('/feedback/add', name: 'app_feedback_add', methods: ['POST'])]
    public function addFeedback(Request $request, EntityManagerInterface $em): Response
    {
        // Get the user with ID 2
        $userRepository = $em->getRepository(Utilisateur::class);
        $user = $userRepository->find(2);

        $commentText = $request->request->get('comment');
        if (!$commentText) {
            return $this->redirectToRoute('app_feedback');
        }
        $feedback = new Feedback();
        $feedback->setComment($commentText);
        $feedback->setCreatedAt(new \DateTime());
        $feedback->setUser($user);
        //$feedback->setAuthor($this->getUser()); // Assuming the user is logged in
        $em->persist($feedback);
        $em->flush();
        return $this->redirectToRoute('app_feedback');
    }

    #[Route('/feedback/{id}', name: 'feedback_delete', methods: ['POST'])]
    public function delete(Request $request, Feedback $feedback, EntityManagerInterface $entityManager): Response
    {

        $entityManager->remove($feedback);
        $entityManager->flush();
        $this->addFlash('success', 'Comment deleted successfully');
        return $this->redirectToRoute('app_feedback');
    }

    #[Route('/feedback/update/{id}', name: 'feedback_update', methods: ['POST'])]
    public function updateFeedback(Request $request, Feedback $feedback, EntityManagerInterface $entityManager): Response
    {
        $comment = $request->request->get('comment');

        if ($comment) {
            $feedback->setComment($comment);
            $entityManager->persist($feedback);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_feedback'); // Remplace par la route de la page
    }


    #[Route('/reply/create/{feedbackId}', name: 'reply_create', methods: ['POST'])]
    public function createReply(int $feedbackId, Request $request, EntityManagerInterface $entityManager): Response
    {

        $feedback = $entityManager->getRepository(Feedback::class)->find($feedbackId);
        $user = $entityManager->getRepository(Utilisateur::class)->find(2);

        if (!$feedback) {
            throw $this->createNotFoundException('Feedback not found');
        }
        $replyComment = $request->request->get('reply_comment');
        if (!$replyComment) {
            return $this->redirectToRoute('app_feedback');
        }
        $reply = new Reply();
        $reply->setComment($replyComment);
        $reply->setFeedback($feedback);
        $reply->setUtilisateur($user);
        $reply->setCreatedAt(new \DateTime());
        $entityManager->persist($reply);
        $entityManager->flush();
        return $this->redirectToRoute('app_feedback'); // Remplace par la bonne route
    }
}
