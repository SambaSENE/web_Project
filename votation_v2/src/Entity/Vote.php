<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\VoteRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Get;

#[ORM\Entity(repositoryClass: VoteRepository::class)]
#[ApiResource (
    operations: [
        new Get(),
        new GetCollection()
    ]
)]
class Vote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $tour = null;

    #[ORM\ManyToOne]
    private ?SessionsVote $session_id = null;

    #[ORM\ManyToOne]
    private ?Candidat $candidat_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTour(): ?int
    {
        return $this->tour;
    }

    public function setTour(int $tour): static
    {
        $this->tour = $tour;

        return $this;
    }

    public function getSessionId(): ?SessionsVote
    {
        return $this->session_id;
    }

    public function setSessionId(?SessionsVote $session_id): static
    {
        $this->session_id = $session_id;

        return $this;
    }

    public function getCandidatId(): ?Candidat
    {
        return $this->candidat_id;
    }

    public function setCandidatId(?Candidat $candidat_id): static
    {
        $this->candidat_id = $candidat_id;

        return $this;
    }
}
