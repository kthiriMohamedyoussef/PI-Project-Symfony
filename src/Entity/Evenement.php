<?php

namespace App\Entity;

use App\Enum\Categorie;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[Groups(['event_search'])]
#[ORM\Table(name: 'evenement', indexes: [
    new ORM\Index(name: 'fk_espace', columns: ['espace_id'])
])]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "Le titre est obligatoire")]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: "Le titre doit faire au moins {{ limit }} caractères",
        maxMessage: "Le titre ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $titre = null;

    #[ORM\Column(type: 'text', nullable: true)]
    #[Assert\Length(
        max: 2000,
        maxMessage: "La description ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $description = null;

    #[ORM\Column(type: 'date')]
    #[Assert\NotBlank(message: "La date est obligatoire")]
    #[Assert\GreaterThanOrEqual(
        "today",
        message: "La date doit être aujourd'hui ou dans le futur"
    )]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    private ?string $statut = null;


    #[ORM\Column(type: 'string', enumType: Categorie::class)]
    #[Assert\NotNull(message: "La catégorie est obligatoire")]
    private ?Categorie $categorie = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, options: ['default' => '0.00'])]
    #[Assert\NotBlank(message: "Le prix est obligatoire")]
    #[Assert\PositiveOrZero(message: "Le prix ne peut pas être négatif")]
    private float $prix = 0.00;

    #[ORM\ManyToOne(targetEntity: Espace::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: 'espace_id', referencedColumnName: 'id', nullable: true)]
    private ?Espace $espace = null;
    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'evenement')]
    private Collection $avis;

    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'evenement')]
    private Collection $commentaires;

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getTitre(): ?string
    {
        return $this->titre;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }
    public function getStatut(): ?string
    {
        return $this->statut;
    }
    public function getImage(): ?string
    {
        return $this->image;
    }
    public function getPrix(): float
    {
        return $this->prix;
    }
    public function getEspace(): ?Espace
    {
        return $this->espace;
    }

    // Setters standards
    public function setTitre(string $titre): static
    {
        $this->titre = $titre;
        return $this;
    }
    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }
    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;
        return $this;
    }
    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }
    public function setImage(?string $image): static
    {
        $this->image = $image;
        return $this;
    }
    public function setPrix(float $prix): static
    {
        $this->prix = $prix;
        return $this;
    }
    public function setEspace(?Espace $espace): static
    {
        $this->espace = $espace;
        return $this;
    }

    // Getter/Setter spécial pour Categorie
    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(Categorie|string $categorie): static
    {
        $this->categorie = $categorie instanceof Categorie
            ? $categorie
            : Categorie::from($categorie);
        return $this;
    }
    public function getAvis(): Collection
    {
        return $this->avis;
    }
    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }

    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }
}
