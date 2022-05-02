<?php

namespace App\Entity;

use App\Repository\FournirEquipementsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournirEquipementsRepository::class)]
class FournirEquipements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToMany(targetEntity: Equipements::class)]
    private $idEquipement;

    #[ORM\ManyToMany(targetEntity: Gite::class)]
    private $idGite;

    public function __construct()
    {
        $this->idEquipement = new ArrayCollection();
        $this->idGite = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Equipements>
     */
    public function getIdEquipement(): Collection
    {
        return $this->idEquipement;
    }

    public function addIdEquipement(Equipements $idEquipement): self
    {
        if (!$this->idEquipement->contains($idEquipement)) {
            $this->idEquipement[] = $idEquipement;
        }

        return $this;
    }

    public function removeIdEquipement(Equipements $idEquipement): self
    {
        $this->idEquipement->removeElement($idEquipement);

        return $this;
    }

    /**
     * @return Collection<int, Gite>
     */
    public function getIdGite(): Collection
    {
        return $this->idGite;
    }

    public function addIdGite(Gite $idGite): self
    {
        if (!$this->idGite->contains($idGite)) {
            $this->idGite[] = $idGite;
        }

        return $this;
    }

    public function removeIdGite(Gite $idGite): self
    {
        $this->idGite->removeElement($idGite);

        return $this;
    }
}
