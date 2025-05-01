<?php

namespace App\Controller\Front;

use App\Entity\CommentInteraction;
use App\Entity\Commentaire;
use App\Entity\Utilisateur;
use App\Repository\CommentInteractionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CommentInteractionController extends AbstractController
{
    #[Route('/interaction', name: 'comment_interaction', methods: ['POST'])]
    public function interaction(Request $request, EntityManagerInterface $em, CommentInteractionRepository $interactionRepo): JsonResponse
    {
        $userId = 4;
        $commentId = $request->request->get('commentId');
        $type = $request->request->get('type');

        $user = $em->getRepository(Utilisateur::class)->find($userId);
        if (!$user) {
            return new JsonResponse(['error' => 'User not found'], 404);
        }
        $comment = $em->getRepository(Commentaire::class)->find($commentId);
        if (!$comment) {
            return new JsonResponse(['error' => 'Comment not found'], 404);
        }

        $interaction = $interactionRepo->findOneBy([
            'user' => $user,
            'comment' => $comment,
        ]);

        if (!$interaction) {
            $interaction = new CommentInteraction();
            $interaction->setUser($user);
            $interaction->setComment($comment);
            $interaction->setInteraction($type);
            $em->persist($interaction);
        } else {
            if ($interaction->getInteraction() === $type) {
                $em->remove($interaction);
            } else {
                $interaction->setInteraction($type);
            }
        }
        $em->flush();
        $likes = $interactionRepo->count(['comment' => $comment, 'interaction' => 'like']);
        $dislikes = $interactionRepo->count(['comment' => $comment, 'interaction' => 'dislike']);

        $comment->setNbrLikes($likes);
        $comment->setNbrDislikes($dislikes);

        $em->flush();

        return new JsonResponse([
            'likes' => $likes,
            'dislikes' => $dislikes,
            'userInteraction' => $type
        ]);
    }

    #[Route('/get-users/{commentId}/{interactionType}', name: 'get_comment_users', methods: ['GET'])]
    public function getUsers(int $commentId, string $interactionType, CommentInteractionRepository $repo): JsonResponse
    {
        // Find the users who interacted with the comment (liked or disliked)
        $interactions = $repo->findBy(['commentaireId' => $commentId, 'interaction' => $interactionType]);

        // Collect users' names
        $users = [];
        foreach ($interactions as $interaction) {
            $users[] = [
                'name' => $interaction->getUser()->getNom() . ' ' . $interaction->getUser()->getPrenom()
            ];
        }

        // Return the list of users as a JSON response
        return new JsonResponse(['users' => $users]);
    }
}
