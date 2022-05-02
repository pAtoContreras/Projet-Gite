<?php

namespace App\Entity;

use App\Repository\FournirServicesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournirServicesRepository::class)]
class FournirServices
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToMany(targetEntity: Services::class)]
    private $idService;

    #[ORM\ManyToMany(targetEntity: Gite::class)]
    private $idGite;

    public function __construct()
    {
        $this->idService = new ArrayCollection();
        $this->idGite = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Services>
     */
    public function getIdService(): Collection
    {
        return $this->idService;
    }

    public function addIdService(Services $idService): self
    {
        if (!$this->idService->contains($idService)) {
            $this->idService[] = $idService;
        }

        return $this;
    }

    public function removeIdService(Services $idService): self
    {
        $this->idService->removeElement($idService);

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
