<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Get;
use App\Repository\SessionsVoteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionsVoteRepository::class)]
#[ApiResource(
    operations: [
        new GetCollection(),
        new Get()
    ]
)]
class SessionsVote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nbTours = null;

    #[ORM\Column]
    private ?int $nbRepresentants = null;

    #[ORM\Column(length: 10)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbTours(): ?int
    {
        return $this->nbTours;
    }

    public function setNbTours(int $nbTours): static
    {
        $this->nbTours = $nbTours;

        return $this;
    }

    public function getNbRepresentants(): ?int
    {
        return $this->nbRepresentants;
    }

    public function setNbRepresentants(int $nbRepresentants): static
    {
        $this->nbRepresentants = $nbRepresentants;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
