<?php

namespace App\Entity;

use App\Repository\ProprietaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProprietaireRepository::class)]
class Proprietaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $nomProprietaire;

    #[ORM\Column(type: 'string', length: 20)]
    private $telProprietaire;

    #[ORM\Column(type: 'string', length: 255)]
    private $mailProprietaire;

    #[ORM\Column(type: 'string', length: 100)]
    private $horairesDisponibilites;

    #[ORM\OneToOne(mappedBy: 'idProprietaire', targetEntity: Gite::class, cascade: ['persist', 'remove'])]
    private $gite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProprietaire(): ?string
    {
        return $this->nomProprietaire;
    }

    public function setNomProprietaire(string $nomProprietaire): self
    {
        $this->nomProprietaire = $nomProprietaire;

        return $this;
    }

    public function getTelProprietaire(): ?string
    {
        return $this->telProprietaire;
    }

    public function setTelProprietaire(string $telProprietaire): self
    {
        $this->telProprietaire = $telProprietaire;

        return $this;
    }

    public function getMailProprietaire(): ?string
    {
        return $this->mailProprietaire;
    }

    public function setMailProprietaire(string $mailProprietaire): self
    {
        $this->mailProprietaire = $mailProprietaire;

        return $this;
    }

    public function getHorairesDisponibilites(): ?string
    {
        return $this->horairesDisponibilites;
    }

    public function setHorairesDisponibilites(string $horairesDisponibilites): self
    {
        $this->horairesDisponibilites = $horairesDisponibilites;

        return $this;
    }

    public function getGite(): ?Gite
    {
        return $this->gite;
    }

    public function setGite(Gite $gite): self
    {
        // set the owning side of the relation if necessary
        if ($gite->getIdProprietaire() !== $this) {
            $gite->setIdProprietaire($this);
        }

        $this->gite = $gite;

        return $this;
    }
}
