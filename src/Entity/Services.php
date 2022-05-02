<?php

namespace App\Entity;

use App\Repository\ServicesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServicesRepository::class)]
class Services
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $nomService;

    #[ORM\Column(type: 'integer')]
    private $coutService;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomService(): ?string
    {
        return $this->nomService;
    }

    public function setNomService(string $nomService): self
    {
        $this->nomService = $nomService;

        return $this;
    }

    public function getCoutService(): ?int
    {
        return $this->coutService;
    }

    public function setCoutService(int $coutService): self
    {
        $this->coutService = $coutService;

        return $this;
    }
}
