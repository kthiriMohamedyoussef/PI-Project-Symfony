<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'comment_interaction', indexes: [
    new ORM\Index(name: 'commentaire_id', columns: ['commentaire_id'])
], uniqueConstraints: [
    new ORM\UniqueConstraint(name: 'unique_user_comment', columns: ['utilisateur_id', 'commentaire_id'])
])]
class CommentInteraction
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'integer')]
    private ?int $utilisateurId = null;

    #[ORM\Column(type: 'integer')]
    private ?int $commentaireId = null;

    #[ORM\Column(type: 'string', length: 50)]
    private ?string $interaction = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCommentaireId(): ?int
    {
        return $this->commentaireId;
    }

    public function setCommentaireId(int $commentaireId): static
    {
        $this->commentaireId = $commentaireId;
        return $this;
    }

    public function getInteraction(): ?string
    {
        return $this->interaction;
    }

    public function setInteraction(string $interaction): static
    {
        $this->interaction = $interaction;
        return $this;
    }
}