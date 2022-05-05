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

    #[ORM\Column(type: 'string', length: 100)]
    private $region;

    #[ORM\Column(type: 'string', length: 100)]
    private $departement;

    #[ORM\Column(type: 'string', length: 100)]
    private $ville;

    #[ORM\Column(type: 'string', length: 10)]
    private $codePostal;

    #[ORM\Column(type: 'integer')]
    private $surface;

    #[ORM\Column(type: 'integer')]
    private $nbChambres;

    #[ORM\Column(type: 'integer')]
    private $nbCouchage;

    #[ORM\Column(type: 'integer')]
    private $tarifJourBS;

    #[ORM\Column(type: 'integer')]
    private $tarifJourHS;

    #[ORM\Column(type: 'integer')]
    private $prixAnimaux;

    #[ORM\OneToOne(inversedBy: 'gite', targetEntity: Proprietaire::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private $idProprietaire;

    #[ORM\Column(type: 'string', length: 180)]
    private $adresse;

    #[ORM\Column(type: 'array', nullable: true)]
    private $arrayImages = [];

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

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {
        $this->codePostal = $codePostal;

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

    public function getNbChambres(): ?int
    {
        return $this->nbChambres;
    }

    public function setNbChambres(int $nbChambres): self
    {
        $this->nbChambres = $nbChambres;

        return $this;
    }

    public function getNbCouchage(): ?int
    {
        return $this->nbCouchage;
    }

    public function setNbCouchage(int $nbCouchage): self
    {
        $this->nbCouchage = $nbCouchage;

        return $this;
    }

    public function getTarifJourBS(): ?int
    {
        return $this->tarifJourBS;
    }

    public function setTarifJourBS(int $tarifJourBS): self
    {
        $this->tarifJourBS = $tarifJourBS;

        return $this;
    }

    public function getTarifJourHS(): ?int
    {
        return $this->tarifJourHS;
    }

    public function setTarifJourHS(int $tarifJourHS): self
    {
        $this->tarifJourHS = $tarifJourHS;

        return $this;
    }

    public function getPrixAnimaux(): ?int
    {
        return $this->prixAnimaux;
    }

    public function setPrixAnimaux(int $prixAnimaux): self
    {
        $this->prixAnimaux = $prixAnimaux;

        return $this;
    }

    public function getIdProprietaire(): ?Proprietaire
    {
        return $this->idProprietaire;
    }

    public function setIdProprietaire(Proprietaire $idProprietaire): self
    {
        $this->idProprietaire = $idProprietaire;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getArrayImages(): ?array
    {
        return $this->arrayImages;
    }

    public function setArrayImages(?array $arrayImages): self
    {
        $this->arrayImages = $arrayImages;

        return $this;
    }
}
