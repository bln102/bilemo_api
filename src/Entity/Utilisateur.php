<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use App\Repository\UtilisateurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Attribute\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
#[ApiResource(
    normalizationContext: ['groups' => ['utilisateur.read']],
    operations: [
        new Get(),
        new GetCollection(
  
        ),
        new Post(
        ),
        new Delete()
    ],
)]
#[UniqueEntity('email', message: "Cet e-mail est associé à un autre utilisateur",)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[
        Assert\NotBlank,
        Groups(['utilisateur.read'])
    ]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[
        Assert\NotBlank,
        Groups(['utilisateur.read'])
    ]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[
        Assert\NotBlank,
        Groups(['utilisateur.read'])
    ]
    private ?\DateTimeInterface $dateNaiss = null;

    #[ORM\Column(length: 255)]
    #[
        Assert\NotBlank,
        Groups(['utilisateur.read'])
    ]
    private ?string $adresse = null;

    #[ORM\Column(length: 255, unique: true)]
    #[
        Assert\NotBlank,
        Groups(['utilisateur.read'])
    ]
    private ?string $email = null;

    #[ORM\Column]
    #[
        Assert\NotBlank,
        Groups(['utilisateur.read'])
    ]
    private ?int $telephone = null;

    #[
        Groups(['utilisateur.read'])
    ]
    #[ORM\ManyToOne(inversedBy: 'utilisateurs')]
    private ?Client $client = null;

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

    public function getDateNaiss(): ?\DateTimeInterface
    {
        return $this->dateNaiss;
    }

    public function setDateNaiss(\DateTimeInterface $dateNaiss): static
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): static
    {
        $this->client = $client;

        return $this;
    }
}
