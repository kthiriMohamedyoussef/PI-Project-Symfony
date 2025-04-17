<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "utilisateur")]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 100)]
    private string $nom;

    #[ORM\Column(type: "string", length: 100)]
    private string $prenom;

    #[ORM\Column(type: "string", length: 255)]
    private string $motdepasse;

    #[ORM\Column(type: "string", length: 0)]
    private string $role;

    #[ORM\Column(type: "integer")]
    private int $adresseId;

    #[ORM\Column(type: "string", length: 15)]
    private string $tel;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $imageurl = null;

    // Many-to-One relationship with Adresse (keeping adresseId column)
    #[ORM\ManyToOne(targetEntity: Adresse::class)]
    #[ORM\JoinColumn(name: "adresse_id", referencedColumnName: "id")]
    private ?Adresse $adresse = null;

    // One-to-Many relationship with Feedback
    #[ORM\OneToMany(targetEntity: Feedback::class, mappedBy: "utilisateur")]
    private Collection $feedbacks;

    // One-to-Many relationship with Reply
    #[ORM\OneToMany(targetEntity: Reply::class, mappedBy: "utilisateur")]
    private Collection $replies;

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

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): static
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
        if ($adresse) {
            $this->adresseId = $adresse->getId();
        }
        return $this;
    }

    public function getFeedbacks(): Collection
    {
        return $this->feedbacks;
    }





    public function getReplies(): Collection
    {
        return $this->replies;
    }
}
