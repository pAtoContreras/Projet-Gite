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

    #[ORM\Column(type: 'string', length: 255)]
    private $nomProprietaire;

    #[ORM\Column(type: 'decimal', precision: 10, scale: '0')]
    private $telProprietaire;

    #[ORM\Column(type: 'string', length: 255)]
    private $mailProprietaire;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $dispoProprietaire;

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

    public function getDispoProprietaire(): ?bool
    {
        return $this->dispoProprietaire;
    }

    public function setDispoProprietaire(?bool $dispoProprietaire): self
    {
        $this->dispoProprietaire = $dispoProprietaire;

        return $this;
    }
}
