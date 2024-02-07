<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\MembresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MembresRepository::class)]
#[ApiResource]
class Membres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nomMembre = null;

    #[ORM\Column(length: 50 , nullable: true)]
    private ?string $prenomMembre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMembre(): ?string
    {
        return $this->nomMembre;
    }

    public function setNomMembre(?string $nomMembre): static
    {
        $this->nomMembre = $nomMembre;

        return $this;
    }

    public function getPrenomMembre(): ?string
    {
        return $this->prenomMembre;
    }

    public function setPrenomMembre(string $prenomMembre): static
    {
        $this->prenomMembre = $prenomMembre;

        return $this;
    }
}
