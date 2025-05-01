<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity]
#[ORM\Table(name: 'adresse')]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(name: 'codePostal', type: 'integer')]
    #[Assert\NotBlank(message: 'Postal code cannot be blank')]
    #[Assert\Range(
        min: 1000,
        max: 99999,
        notInRangeMessage: 'Postal code must be between {{ min }} and {{ max }}'
    )]
    private ?int $codePostal = null;

    #[ORM\Column(type: 'string', length: 100)]
    #[Assert\NotBlank(message: 'Region cannot be blank')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Region must be at least 2 characters long',
        maxMessage: 'Region cannot be longer than {100 characters'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z\s\-]+$/',
        message: 'Region can only contain letters, spaces and hyphens'
    )]
    private ?string $region = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): static
    {
        $this->codePostal = $codePostal;
        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;
        return $this;
    }

    public function fullAddress(): string
    {
        return $this->region . ', ' . $this->codePostal;
    }
}
