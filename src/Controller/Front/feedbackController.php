<?php

namespace App\Controller\Front;

use App\Entity\Feedback;
use App\Entity\Reply;
use App\Entity\Utilisateur;
use App\Repository\FeedbackRepository;
use App\Service\GeminiModerationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;
use Symfony\Component\Routing\Attribute\Route;

final class feedbackController extends AbstractController
{
    #[Route('/feedback', name: 'app_feedback')]
    public function index(FeedbackRepository $feedbackRepo): Response
    {
        $feedbacks = $feedbackRepo->findBy([], ['createdAt' => 'DESC']);
        return $this->render('Front/feedbacks.html.twig', [
            'feedbacks' => $feedbacks,
        ]);
    }

    #[Route('/feedback/add', name: 'app_feedback_add', methods: ['POST'])]
    public function addFeedback(Request $request, EntityManagerInterface $em, GeminiModerationService $moderator): Response
    {

        // Get the user with ID 2
        $userRepository = $em->getRepository(Utilisateur::class);
        $user = $userRepository->find(2);

        $commentText = $request->request->get('comment');
        if (!$commentText) {
            return $this->redirectToRoute('app_feedback');
        }
        if ($moderator->containsObsceneLanguage($commentText)) {
            $this->addFlash('danger', 'Obscene language is not allowed.');
            return $this->redirectToRoute('app_feedback');
        }

        $feedback = new Feedback();
        $feedback->setComment($commentText);
        $feedback->setCreatedAt(new \DateTime());
        $feedback->setUser($user);
        $em->persist($feedback);
        $em->flush();
        return $this->redirectToRoute('app_feedback');
    }

    #[Route('/feedback/{id}', name: 'feedback_delete', methods: ['POST'])]
    public function delete(Request $request, Feedback $feedback, EntityManagerInterface $entityManager): Response
    {

        $replies = $entityManager->createQuery(
            'SELECT r FROM App\Entity\Reply r WHERE r.feedback = :feedback'
        )->setParameter('feedback', $feedback)
            ->getResult();

        foreach ($replies as $reply) {
            $entityManager->remove($reply);
        }

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
    #[Route('/sentiment', name: 'feedback_sentiment', methods: ['POST'])]
    public function getSentiment(Request $request): JsonResponse
    {
        try {
            $comment = $request->request->get('comment', '');

            if (!is_string($comment) || trim($comment) === '') {
                throw new \InvalidArgumentException('Invalid comment provided');
            }

            $process = new Process([
                'python',
                $this->getParameter('kernel.project_dir') . '/python/sentiment_analysis.py',
                $comment
            ]);

            $process->run();

            if (!$process->isSuccessful()) {
                throw new \RuntimeException($process->getErrorOutput());
            }

            $result = json_decode($process->getOutput(), true);

            if (!isset($result['sentiment'])) {
                throw new \RuntimeException('Invalid analysis result format: ' . $process->getOutput());
            }

            return new JsonResponse([
                'sentiment' => $result['sentiment']
            ]);
        } catch (\Exception $e) {

            return new JsonResponse(
                [
                    'error' => 'Sentiment analysis failed',
                    'details' => $e->getMessage()
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            );
        }
    }

    #[Route('/reply/delete/{id}', name: 'reply_delete', methods: ['POST'])]
    public function deleteReply(Reply $reply, EntityManagerInterface $em): Response
    {
        $em->remove($reply);
        $em->flush();

        $this->addFlash('success', 'Reply deleted successfully.');
        return $this->redirectToRoute('app_feedback');
    }


    #[Route('/reply/update/{id}', name: 'reply_update', methods: ['POST'])]
    public function updateReply(Request $request, Reply $reply, EntityManagerInterface $em): Response
    {
        $newComment = $request->request->get('comment');

        if ($newComment && trim($newComment) !== '') {
            $reply->setComment($newComment);
            $em->persist($reply);
            $em->flush();

            $this->addFlash('success', 'Reply updated successfully.');
        } else {
            $this->addFlash('danger', 'Comment cannot be empty.');
        }

        return $this->redirectToRoute('app_feedback');
    }

    #[Route('/about/positive-feedback-percentage', name: 'api_positive_feedback_percentage', methods: ['GET'])]
    public function getPositiveFeedbackPercentage(FeedbackRepository $feedbackRepository): JsonResponse
    {
        $feedbacks = $feedbackRepository->findAll();
        $totalFeedbacks = count($feedbacks);

        if ($totalFeedbacks === 0) {
            return new JsonResponse(['percentage' => 0]);
        }

        $positiveCount = 0;

        foreach ($feedbacks as $feedback) {
            $comment = $feedback->getComment(); // adapt if your field is called differently

            $process = new Process([
                'python',
                $this->getParameter('kernel.project_dir') . '/python/sentiment_analysis.py',
                $comment
            ]);
            $process->run();

            if ($process->isSuccessful()) {
                $result = json_decode($process->getOutput(), true);
                if (($result['sentiment'] ?? '') === 'positive') {
                    $positiveCount++;
                }
            }
        }

        $percentage = round(($positiveCount / $totalFeedbacks) * 100);

        return new JsonResponse(['percentage' => $percentage]);
    }
}
