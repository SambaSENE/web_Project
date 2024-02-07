<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SessionsCandidatsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionsCandidatsRepository::class)]
#[ApiResource]
class SessionsCandidats
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Candidats $candidat = null;

    #[ORM\ManyToOne]
    private ?SessionsVote $session = null;

     public function getId(): ?int
    {
        return $this->id;
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

    public function getSession(): ?SessionsVote
    {
        return $this->session;
    }

    public function setSession(?SessionsVote $session): static
    {
        $this->session = $session;

        return $this;
    }
}
