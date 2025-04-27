<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "panier", indexes: [
    new ORM\Index(name: "materiel_id", columns: ["materiel_id"]),
    new ORM\Index(name: "fk_utilisateur", columns: ["utilisateur"]),
    new ORM\Index(name: "fk_evenement", columns: ["id_evenement"])
])]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    private string $utilisateur;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $dateDebut;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $dateFin;

    #[ORM\Column(type: "integer")]
    private int $materielId;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $idEvenement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateur(): string
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(string $utilisateur): static
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }

    public function getDateDebut(): \DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): \DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getMaterielId(): int
    {
        return $this->materielId;
    }

    public function setMaterielId(int $materielId): static
    {
        $this->materielId = $materielId;
        return $this;
    }

    public function getIdEvenement(): ?int
    {
        return $this->idEvenement;
    }

    public function setIdEvenement(?int $idEvenement): static
    {
        $this->idEvenement = $idEvenement;
        return $this;
    }
}
