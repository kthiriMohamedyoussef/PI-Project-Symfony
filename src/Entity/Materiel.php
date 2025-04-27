<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "materiel", indexes: [new ORM\Index(name: "fk_type_materiel", columns: ["type_materiel_id"])])]
class Materiel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: "float")]
    private ?float $prix = null;

    #[ORM\Column(type: "string", length: 255)]
    private ?string $etat = null;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $typeMaterielId = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $imagePath = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;
        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;
        return $this;
    }

    public function getTypeMaterielId(): ?int
    {
        return $this->typeMaterielId;
    }

    public function setTypeMaterielId(?int $typeMaterielId): static
    {
        $this->typeMaterielId = $typeMaterielId;
        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(?string $imagePath): static
    {
        $this->imagePath = $imagePath;
        return $this;
    }
}
