<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'text', nullable: true)]
    private $contenu;

    #[ORM\Column(type: 'string', length: 255)]
    private $nomVoyageur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getNomVoyageur(): ?string
    {
        return $this->nomVoyageur;
    }

    public function setNomVoyageur(string $nomVoyageur): self
    {
        $this->nomVoyageur = $nomVoyageur;

        return $this;
    }
}
