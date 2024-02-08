<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ClientsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientsRepository::class)]
#[ApiResource]
class Clients
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $client_name = null;

    #[ORM\ManyToMany(targetEntity: Read::class, mappedBy: 'client')]
    private Collection $readFlim;

    public function __construct()
    {
        $this->readFlim = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientName(): ?string
    {
        return $this->client_name;
    }

    public function setClientName(string $client_name): static
    {
        $this->client_name = $client_name;

        return $this;
    }

    /**
     * @return Collection<int, Read>
     */
    public function getReadFlim(): Collection
    {
        return $this->readFlim;
    }

    public function addReadFlim(Read $readFlim): static
    {
        if (!$this->readFlim->contains($readFlim)) {
            $this->readFlim->add($readFlim);
            $readFlim->addClient($this);
        }

        return $this;
    }

    public function removeReadFlim(Read $readFlim): static
    {
        if ($this->readFlim->removeElement($readFlim)) {
            $readFlim->removeClient($this);
        }

        return $this;
    }
}
