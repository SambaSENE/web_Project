<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\FilmsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FilmsRepository::class)]
#[ApiResource]
class Films
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $tilm_title = null;

    #[ORM\Column]
    private ?int $timing_film = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTilmTitle(): ?string
    {
        return $this->tilm_title;
    }

    public function setTilmTitle(string $tilm_title): static
    {
        $this->tilm_title = $tilm_title;

        return $this;
    }

    public function getTimingFilm(): ?int
    {
        return $this->timing_film;
    }

    public function setTimingFilm(int $timing_film): static
    {
        $this->timing_film = $timing_film;

        return $this;
    }
}
