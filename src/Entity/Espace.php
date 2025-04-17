<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'espace', indexes: [
    new ORM\Index(name: 'fk_type_espace', columns: ['type_espace_id'])
])]
class Espace
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $localisation = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $etat = null;

    #[ORM\Column(name: 'imageUrl', type: 'string', length: 255)]
    private ?string $imageUrl = null;

    #[ORM\ManyToOne(targetEntity: TypeEspace::class)]
    #[ORM\JoinColumn(name: 'type_espace_id', referencedColumnName: 'id')]
    private ?TypeEspace $typeEspace = null;

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

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;
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

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): static
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    public function getTypeEspace(): ?TypeEspace
    {
        return $this->typeEspace;
    }

    public function setTypeEspace(?TypeEspace $typeEspace): static
    {
        $this->typeEspace = $typeEspace;
        return $this;
    }
}
