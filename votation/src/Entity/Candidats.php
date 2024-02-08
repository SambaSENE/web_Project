<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Get;
use App\Repository\CandidatsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatsRepository::class)]
#[ApiResource(
    operations: [
        new GetCollection(),
        new Get()
    ]
)]
class Candidats
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $slogan = null;

    #[ORM\OneToMany(targetEntity: SessionsCandidat::class, mappedBy: 'candidat')]
    private Collection $sessionsCandidats;

    public function __construct()
    {
        $this->sessionsCandidats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSlogan(): ?string
    {
        return $this->slogan;
    }

    public function setSlogan(string $slogan): static
    {
        $this->slogan = $slogan;

        return $this;
    }

    /**
     * @return Collection<int, SessionsCandidat>
     */
    public function getSessionsCandidats(): Collection
    {
        return $this->sessionsCandidats;
    }

    public function addSessionsCandidat(SessionsCandidat $sessionsCandidat): static
    {
        if (!$this->sessionsCandidats->contains($sessionsCandidat)) {
            $this->sessionsCandidats->add($sessionsCandidat);
            $sessionsCandidat->setCandidat($this);
        }

        return $this;
    }

    public function removeSessionsCandidat(SessionsCandidat $sessionsCandidat): static
    {
        if ($this->sessionsCandidats->removeElement($sessionsCandidat)) {
            // set the owning side to null (unless already changed)
            if ($sessionsCandidat->getCandidat() === $this) {
                $sessionsCandidat->setCandidat(null);
            }
        }

        return $this;
    }
}
