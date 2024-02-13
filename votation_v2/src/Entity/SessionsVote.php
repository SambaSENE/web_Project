<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SessionsVoteRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Get;

#[ORM\Entity(repositoryClass: SessionsVoteRepository::class)]
#[ApiResource (
    operations: [
        new Get(),
        new GetCollection()
    ]
)]
class SessionsVote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nb_tours = null;

    #[ORM\Column]
    private ?int $nb_representants = null;

    #[ORM\Column(length: 10)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbTours(): ?string
    {
        return $this->nb_tours;
    }

    public function setNbTours(string $nb_tours): static
    {
        $this->nb_tours = $nb_tours;

        return $this;
    }

    public function getNbRepresentants(): ?int
    {
        return $this->nb_representants;
    }

    public function setNbRepresentants(int $nb_representants): static
    {
        $this->nb_representants = $nb_representants;

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
