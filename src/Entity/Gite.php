<?php

namespace App\Entity;

use App\Repository\GiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GiteRepository::class)]
class Gite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $region;

    #[ORM\Column(type: 'decimal', precision: 5, scale: '0')]
    private $departement;

    #[ORM\Column(type: 'string', length: 255)]
    private $ville;

    #[ORM\Column(type: 'integer')]
    private $surface;

    #[ORM\Column(type: 'integer')]
    private $nbrChambre;

    #[ORM\Column(type: 'integer')]
    private $nbrCouchage;

    #[ORM\Column(type: 'integer')]
    private $tarifJour;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $animaux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getNbrChambre(): ?int
    {
        return $this->nbrChambre;
    }

    public function setNbrChambre(int $nbrChambre): self
    {
        $this->nbrChambre = $nbrChambre;

        return $this;
    }

    public function getNbrCouchage(): ?int
    {
        return $this->nbrCouchage;
    }

    public function setNbrCouchage(int $nbrCouchage): self
    {
        $this->nbrCouchage = $nbrCouchage;

        return $this;
    }

    public function getTarifJour(): ?int
    {
        return $this->tarifJour;
    }

    public function setTarifJour(int $tarifJour): self
    {
        $this->tarifJour = $tarifJour;

        return $this;
    }

    public function getAnimaux(): ?bool
    {
        return $this->animaux;
    }

    public function setAnimaux(?bool $animaux): self
    {
        $this->animaux = $animaux;

        return $this;
    }
}
