<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use App\Repository\VotesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VotesRepository::class)]
// #[ApiResource]
#[ApiResource(
    operations: [
        new Get(),
        new GetCollection(),
        new Post()
    ]
)]
class Votes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $tours = null;

    #[ORM\ManyToOne]
    private ?SessionsVote $session = null;

    #[ORM\ManyToOne]
    private ?Candidats $candidat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTours(): ?int
    {
        return $this->tours;
    }

    public function setTours(int $tours): static
    {
        $this->tours = $tours;

        return $this;
    }

    public function getSession(): ?SessionsVote
    {
        return $this->session;
    }

    public function setSession(?SessionsVote $session): static
    {
        $this->session = $session;

        return $this;
    }

    public function getCandidat(): ?Candidats
    {
        return $this->candidat;
    }

    public function setCandidat(?Candidats $candidat): static
    {
        $this->candidat = $candidat;

        return $this;
    }
}
