<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\VilleRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: VilleRepository::class)]
#[ApiResource ]
   
class Ville
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8)]
    private ?string $code_postal_Ville = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_ville = null;

    #[ORM\ManyToOne]
   
    private ?Pays $id_pays = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePostalVille(): ?string
    {
        return $this->code_postal_Ville;
    }

    public function setCodePostalVille(string $code_postal_Ville): static
    {
        $this->code_postal_Ville = $code_postal_Ville;

        return $this;
    }

    public function getNomVille(): ?string
    {
        return $this->nom_ville;
    }

    public function setNomVille(string $nom_ville): static
    {
        $this->nom_ville = $nom_ville;

        return $this;
    }

    public function getIdPays(): ?Pays
    {
        return $this->id_pays;
    }

    public function setIdPays(?Pays $id_pays): static
    {
        $this->id_pays = $id_pays;

        return $this;
    }
}
