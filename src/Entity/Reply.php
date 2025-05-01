<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "reply", indexes: [
    new ORM\Index(name: "utilisateur_id", columns: ["utilisateur_id"]),
    new ORM\Index(name: "feedback_id", columns: ["feedback_id"])
])]
class Reply
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "text")]
    private string $comment;

    #[ORM\Column(type: "datetime", nullable: true, options: ["default" => "CURRENT_TIMESTAMP"])]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: "integer")]
    private int $feedbackId;

    #[ORM\Column(type: "integer")]
    private int $utilisateurId;


    #[ORM\ManyToOne(targetEntity: Feedback::class, inversedBy: 'replies')]
    #[ORM\JoinColumn(name: 'feedback_id', referencedColumnName: 'id')]
    private ?Feedback $feedback = null;


    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'replies')]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id')]
    private ?Utilisateur $utilisateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): static
    {
        $this->comment = $comment;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getFeedbackId(): int
    {
        return $this->feedbackId;
    }

    public function setFeedbackId(int $feedbackId): static
    {
        $this->feedbackId = $feedbackId;
        return $this;
    }

    public function getUtilisateurId(): int
    {
        return $this->utilisateurId;
    }

    public function setUtilisateurId(int $utilisateurId): static
    {
        $this->utilisateurId = $utilisateurId;
        return $this;
    }
    public function getFeedback(): ?Feedback
    {
        return $this->feedback;
    }

    public function setFeedback(?Feedback $feedback): self
    {
        $this->feedback = $feedback;
        if ($feedback) {
            $this->feedbackId = $feedback->getId();
        }
        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;
        if ($utilisateur) {
            $this->utilisateurId = $utilisateur->getId();
        }
        return $this;
    }
}
