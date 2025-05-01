<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Enum\Role;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity]
#[ORM\Table(name: "utilisateur")]
class Utilisateur implements PasswordAuthenticatedUserInterface

{
    public function getPassword(): string
    {
        return $this->motdepasse;
    }
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "Nom cannot be blank.")]
    #[Assert\Length(
        max: 20,
        maxMessage: "Nom cannot be longer than  20  characters."
    )]

    private string $nom;
    
    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "Prenom cannot be blank.")]
    #[Assert\Length(
        max: 20,
        maxMessage: "Prenom cannot be longer than  20  characters."
    )]

    private string $prenom;
    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Motdepasse cannot be blank.")]
    #[Assert\Length(
        min: 8,
        minMessage: "Motdepasse should be at least  8  characters long."
    )]
    private string $motdepasse;

    #[ORM\Column(type: 'string', enumType: Role::class)]
    private Role $role;

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $adresseId = null;

    #[ORM\Column(type: "string", length: 15)]
    #[Assert\NotBlank(message: "Tel cannot be blank.")]
    #[Assert\Regex(
        pattern: "/^\+?[0-9]{1,4}?[-. ]?(\(?\d{1,3}?\)?[-. ]?)?[\d-]{5,15}$/",
        message: "Tel must be a valid phone number."
    )]
    private string $tel;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    #[Assert\NotBlank(message: "Email cannot be blank.")]
    #[Assert\Email(message: "Please provide a valid email address.")]
    private ?string $email = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $imageurl = null;

    // Many-to-One relationship with Adresse (keeping adresseId column)
    #[ORM\ManyToOne(targetEntity: Adresse::class, fetch: "EAGER")]
    #[ORM\JoinColumn(name: "adresse_id", referencedColumnName: "id")]
    private ?Adresse $adresse = null;

    // One-to-Many relationship with Feedback
    #[ORM\OneToMany(targetEntity: Feedback::class, mappedBy: "utilisateur")]
    private Collection $feedbacks;
    // One-to-Many relationship with Reply
    #[ORM\OneToMany(targetEntity: Reply::class, mappedBy: "utilisateur")]
    private Collection $replies;

    #[ORM\OneToMany(targetEntity: Avis::class, mappedBy: 'utilisateur')]
    private Collection $avis;

    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'utilisateur')]
    private Collection $commentaires;

    #[ORM\OneToMany(targetEntity: CommentInteraction::class, mappedBy: 'user')]
    private Collection $commentInteractions;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getMotdepasse(): string
    {
        return $this->motdepasse;
    }

    public function setMotdepasse(string $motdepasse): static
    {
        $this->motdepasse = $motdepasse;
        return $this;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public function setRole(Role $role): static
    {
        $this->role = $role;
        return $this;
    }

    public function getAdresseId(): int
    {
        return $this->adresseId;
    }

    public function setAdresseId(int $adresseId): static
    {
        $this->adresseId = $adresseId;
        return $this;
    }

    public function getTel(): string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getImageurl(): ?string
    {
        return $this->imageurl;
    }

    public function setImageurl(?string $imageurl): static
    {
        $this->imageurl = $imageurl;
        return $this;
    }

    public function getAdresse(): ?Adresse
    {
        return $this->adresse;
    }

    public function setAdresse(?Adresse $adresse): self
    {
        $this->adresse = $adresse;
        if ($adresse !== null) {
            $this->adresseId = $adresse->getId();
        }
        return $this;
    }

    public function getFeedbacks(): Collection
    {
        return $this->feedbacks;
    }



    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function getReplies(): Collection
    {
        return $this->replies;
    }
}
