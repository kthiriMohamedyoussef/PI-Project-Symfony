<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "type_materiel")]
class TypeMateriel
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    private string $nomm;

    #[ORM\Column(type: "string", length: 255)]
    private string $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomm(): string
    {
        return $this->nomm;
    }

    public function setNomm(string $nomm): static
    {
        $this->nomm = $nomm;
        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }
}
