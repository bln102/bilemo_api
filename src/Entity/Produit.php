<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;

#[ApiResource(
    operations: [
        new Get(),
        new GetCollection()
    ]
)]
#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $designation = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column]
    private ?float $poids = null;

    #[ORM\Column(length: 255)]
    private ?string $marque = null;

    #[ORM\Column]
    private ?float $stockage = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $anneeModele = null;

    #[ORM\Column]
    private ?float $TailleEcran = null;

    #[ORM\Column(length: 255)]
    private ?string $systeme = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): static
    {
        $this->designation = $designation;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): static
    {
        $this->poids = $poids;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getStockage(): ?float
    {
        return $this->stockage;
    }

    public function setStockage(float $stockage): static
    {
        $this->stockage = $stockage;

        return $this;
    }

    public function getAnneeModele(): ?\DateTimeInterface
    {
        return $this->anneeModele;
    }

    public function setAnneeModele(\DateTimeInterface $anneeModele): static
    {
        $this->anneeModele = $anneeModele;

        return $this;
    }

    public function getTailleEcran(): ?float
    {
        return $this->TailleEcran;
    }

    public function setTailleEcran(float $TailleEcran): static
    {
        $this->TailleEcran = $TailleEcran;

        return $this;
    }

    public function getSysteme(): ?string
    {
        return $this->systeme;
    }

    public function setSysteme(string $systeme): static
    {
        $this->systeme = $systeme;

        return $this;
    }
}
