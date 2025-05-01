<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'commentaire', indexes: [new ORM\Index(name: 'fk_commentaire_evenement', columns: ['evenement_id'])])]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 250)]
    private ?string $comment = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $dateComment = null;

    #[ORM\Column(type: 'time')]
    private ?\DateTimeInterface $timeComment = null;

    #[ORM\Column(type: 'integer')]
    private ?int $nbrLikes = null;

    #[ORM\Column(type: 'integer', nullable: true, options: ['default' => 0])]
    private ?int $nbrDislikes = 0;

    #[ORM\Column(type: 'integer')]
    private ?int $utilisateurId = null;

    #[ORM\ManyToOne(targetEntity: Evenement::class)]
    #[ORM\JoinColumn(name: 'evenement_id', referencedColumnName: 'id')]
    private ?Evenement $evenement = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class)]
    #[ORM\JoinColumn(name: 'utilisateur_id', referencedColumnName: 'id')]
    private ?Utilisateur $utilisateur = null;

    #[ORM\OneToMany(targetEntity: CommentInteraction::class, mappedBy: 'comment')]
    private Collection $interactions;


    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): static
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): static
    {
        $this->comment = $comment;
        return $this;
    }

    public function getDateComment(): ?\DateTimeInterface
    {
        return $this->dateComment;
    }

    public function setDateComment(\DateTimeInterface $dateComment): static
    {
        $this->dateComment = $dateComment;
        return $this;
    }

    public function getTimeComment(): ?\DateTimeInterface
    {
        return $this->timeComment;
    }

    public function setTimeComment(\DateTimeInterface $timeComment): static
    {
        $this->timeComment = $timeComment;
        return $this;
    }

    public function getNbrLikes(): ?int
    {
        return $this->nbrLikes;
    }

    public function setNbrLikes(int $nbrLikes): static
    {
        $this->nbrLikes = $nbrLikes;
        return $this;
    }

    public function getNbrDislikes(): ?int
    {
        return $this->nbrDislikes;
    }

    public function setNbrDislikes(?int $nbrDislikes): static
    {
        $this->nbrDislikes = $nbrDislikes;
        return $this;
    }

    public function getUtilisateurId(): ?int
    {
        return $this->utilisateurId;
    }

    public function setUtilisateurId(int $utilisateurId): static
    {
        $this->utilisateurId = $utilisateurId;
        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenement $evenement): static
    {
        $this->evenement = $evenement;
        return $this;
    }
}
