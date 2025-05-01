<?php

namespace App\Controller\Front;

use App\Entity\Utilisateur;
use App\Entity\Avis;
use App\Entity\Commentaire;
use App\Entity\Evenement;
use App\Repository\CommentRepository;
use App\Service\GeminiModerationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class commentsController extends AbstractController
{
    /**
     * Récupère l'utilisateur connecté depuis la session, identique aux autres controllers.
     */
    public function getCustomUser(EntityManagerInterface $em, SessionInterface $session): ?Utilisateur
    {
        $userId = $session->get('user_id');
        return $userId
            ? $em->getRepository(Utilisateur::class)->find($userId)
            : null;
    }

    #[Route('/comments', name: 'app_comments')]
    public function index(EntityManagerInterface $em, RequestStack $requestStack): Response
    {
        $session = $requestStack->getSession();
        $user    = $this->getCustomUser($em, $session);
        $event   = $em->getRepository(Evenement::class)->find(73);

        if (!$user || !$event) {
            throw $this->createNotFoundException('User or Event not found');
        }

        $comments = $em->getRepository(Commentaire::class)->findBy([
            'evenement' => $event
        ], ['dateComment' => 'DESC']);
        $avis = $em->getRepository(Avis::class)->findOneBy([
            'utilisateur' => $user,
            'evenement'   => $event
        ]);

        return $this->render('Front/comments.html.twig', [
            'user'            => $user,
            'event'           => $event,
            'existing_rating' => $avis ? $avis->getNote() : null,
            'comments'        => $comments,
        ]);
    }

    #[Route('/comments/submit-rating', name: 'app_submit_rating', methods: ['POST'])]
    public function submitRating(
        Request $request,
        EntityManagerInterface $em,
        RequestStack $requestStack
    ): Response {
        $session = $requestStack->getSession();
        $eventId = $session->get('idEvent');
        $user    = $this->getCustomUser($em, $session);
        $event   = $em->getRepository(Evenement::class)->find($eventId);

        if (!$user || !$event) {
            $this->addFlash('error', 'User or Event not found');
            return $this->redirectToRoute('event_show', ['id' => $eventId]);
        }

        $note = (int) $request->request->get('note');
        if ($note < 1 || $note > 5) {
            $this->addFlash('error', 'Please select a valid rating (1-5 stars)');
            return $this->redirectToRoute('event_show', ['id' => $eventId]);
        }

        $avis = $em->getRepository(Avis::class)->findOneBy([
            'utilisateur' => $user,
            'evenement'   => $event
        ]);

        if ($avis) {
            $avis->setNote($note);
            $this->addFlash('success', 'Your rating has been updated!');
        } else {
            $avis = new Avis();
            $avis->setNote($note)
                ->setUtilisateur($user)
                ->setEvenement($event)
                ->setDate(new \DateTimeImmutable())
                ->setHeure(new \DateTimeImmutable());
            $em->persist($avis);
            $this->addFlash('success', 'Thank you for your rating!');
        }

        $em->flush();
        return $this->redirectToRoute('event_show', ['id' => $eventId]);
    }

    #[Route('/comments/add', name: 'app_add_comment', methods: ['POST'])]
    public function addComment(
        Request $request,
        EntityManagerInterface $em,
        GeminiModerationService $moderator,
        RequestStack $requestStack
    ): Response {
        $session = $requestStack->getSession();
        $eventId = $session->get('idEvent');
        $user    = $this->getCustomUser($em, $session);

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour ajouter un commentaire.');
            return $this->redirectToRoute('app_comments');
        }

        $event = $em->getRepository(Evenement::class)->find($eventId);
        if (!$event) {
            throw $this->createNotFoundException('Événement non trouvé.');
        }

        $commentText = trim($request->request->get('comment'));
        if (empty($commentText)) {
            $this->addFlash('error', 'Le commentaire ne peut pas être vide.');
            return $this->redirectToRoute('event_show', ['id' => $eventId]);
        }

        $isObscene = $moderator->containsObsceneLanguage($commentText);
        if ($isObscene) {
            $this->addFlash('danger', 'Obscene language is not allowed.');
            return $this->redirectToRoute('event_show', ['id' => $eventId]);
        }

        $comment = new Commentaire();
        $comment->setComment($commentText)
                ->setUtilisateur($user)
                ->setEvenement($event)
                ->setDateComment(new \DateTime())
                ->setTimeComment(new \DateTime())
                ->setNbrLikes(0)
                ->setNbrDislikes(0);

        $em->persist($comment);
        $em->flush();

        $this->addFlash('success', 'Votre commentaire a été ajouté avec succès.');
        return $this->redirectToRoute('event_show', ['id' => $eventId]);
    }

    #[Route('/comments/delete/{id}', name: 'app_comment_delete', methods: ['POST'])]
    public function deleteComment(Commentaire $comment, EntityManagerInterface $entityManager, RequestStack $requestStack): Response
    {
        $session = $requestStack->getSession();
        $eventId = $session->get('idEvent');
        $entityManager->remove($comment);
        $entityManager->flush();

        $this->addFlash('success', 'Comment deleted successfully.');
        return $this->redirectToRoute('event_show', ['id' => $eventId]);
    }

    #[Route('/comment/update/{id}', name: 'app_comment_update', methods: ['POST'])]
    public function update(
        Request $request,
        CommentRepository $commentRepository,
        int $id,
        EntityManagerInterface $em,
        RequestStack $requestStack
    ): Response {
        $session = $requestStack->getSession();
        $eventId = $session->get('idEvent');
        $comment = $commentRepository->find($id);

        if (!$comment) {
            $this->addFlash('error', 'Comment not found.');
            return $this->redirectToRoute('event_show', ['id' => $eventId]);
        }

        $newContent = $request->request->get('comment');
        if ($newContent) {
            $comment->setComment($newContent);
            $em->flush();
            $this->addFlash('success', 'Comment updated successfully.');
        } else {
            $this->addFlash('error', 'Comment content cannot be empty.');
        }

        return $this->redirectToRoute('event_show', ['id' => $eventId]);
    }
}
