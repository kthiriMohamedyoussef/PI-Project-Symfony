<?php

namespace App\Entity;
use App\Repository\ProgrammeRepository; 
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProgrammeRepository::class)]
#[ORM\Table(name: "programme", indexes: [
    new ORM\Index(name: "fk_programme_evenement", columns: ["evenement_id"])
])]
class Programme
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    private string $activite;

    #[ORM\Column(name: "heurDebut", type: "time")]
    private \DateTimeInterface $heureDebut;

    #[ORM\Column(name: "heurFin", type: "time")]
    private \DateTimeInterface $heureFin;

    #[ORM\ManyToOne(targetEntity: Evenement::class)]
    #[ORM\JoinColumn(name: "evenement_id", referencedColumnName: "id", onDelete: "CASCADE")]
    private ?Evenement $evenement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivite(): string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): static
    {
        $this->activite = $activite;
        return $this;
    }

    public function getHeureDebut(): \DateTimeInterface
    {
        return $this->heureDebut;
    }

    public function setHeureDebut(\DateTimeInterface $heureDebut): static
    {
        $this->heureDebut = $heureDebut;
        return $this;
    }

    public function getHeureFin(): \DateTimeInterface
    {
        return $this->heureFin;
    }

    public function setHeureFin(\DateTimeInterface $heureFin): static
    {
        if ($this->heureDebut && $heureFin < $this->heureDebut) {
            throw new \InvalidArgumentException("L'heure de fin doit être après l'heure de début.");
        }
        $this->heureFin = $heureFin;
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
