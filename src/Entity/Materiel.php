<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "materiel")]
class Materiel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le nom du matériel est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z0-9\s\-éèêëàâäôöûüçÉÈÊËÀÂÄÔÖÛÜÇ]+$/",
        message: "Seuls les lettres, chiffres, espaces et tirets sont autorisés."
    )]
    private ?string $nom = null;


    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Le prix est obligatoire.")]
    #[Assert\Type(type: "numeric", message: "Le prix doit être un nombre.")]
    #[Assert\Positive(message: "Le prix doit être positif.")]
    #[Assert\LessThanOrEqual(
        value: 10000,
        message: "Le prix ne peut pas dépasser {{ value }} TND."
    )]
    private ?float $prix = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "L'état est obligatoire.")]
    #[Assert\Choice(
        choices: ["DISPONIBLE", "INDISPONIBLE"],
        message: "Choisissez un état valide."
    )]
    private ?string $etat = null;


    #[ORM\Column(name: "type_materiel_id", type: "integer", nullable: true)]
    private ?int $typeMaterielId = null;

    #[ORM\Column(name: "ImagePath", type: "string", length: 255, nullable: true)]
    private ?string $imagePath = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
{
    if ($nom === null) {
        $nom = 'Default Name'; // Or throw an exception if it's required
    }
    $this->nom = $nom;

    return $this;
}


    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
{
    $this->prix = $prix; // Let Symfony handle validation
    return $this;
}


    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        // If etat is null, set it to a default value (e.g., "available")
        if ($etat === null) {
            $etat = "available"; // You can set this to any default state
        }
        $this->etat = $etat;

        return $this;
    }


    public function getTypeMaterielId(): ?int
    {
        return $this->typeMaterielId;
    }

    public function setTypeMaterielId(?int $typeMaterielId): self
    {
        $this->typeMaterielId = $typeMaterielId;
        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(?string $imagePath): self
    {
        $this->imagePath = $imagePath;
        return $this;
    }
}