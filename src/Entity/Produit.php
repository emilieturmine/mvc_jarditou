<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Reference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Libelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Descript;

    /**
     * @ORM\Column(type="integer")
     */
    private $Prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $Stock;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Couleur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Photo;

    /**
     * @ORM\Column(type="date")
     */
    private $DAjout;

    /**
     * @ORM\Column(type="date")
     */
    private $DModif;

    /**
     * @ORM\Column(type="integer")
     */
    private $Bloque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->Reference;
    }

    public function setReference(string $Reference): self
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }

    public function getDescript(): ?string
    {
        return $this->Descript;
    }

    public function setDescript(string $Descript): self
    {
        $this->Descript = $Descript;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->Stock;
    }

    public function setStock(int $Stock): self
    {
        $this->Stock = $Stock;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->Couleur;
    }

    public function setCouleur(string $Couleur): self
    {
        $this->Couleur = $Couleur;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->Photo;
    }

    public function setPhoto(string $Photo): self
    {
        $this->Photo = $Photo;

        return $this;
    }

    public function getDAjout(): ?\DateTimeInterface
    {
        return $this->DAjout;
    }

    public function setDAjout(\DateTimeInterface $DAjout): self
    {
        $this->DAjout = $DAjout;

        return $this;
    }

    public function getDModif(): ?\DateTimeInterface
    {
        return $this->DModif;
    }

    public function setDModif(\DateTimeInterface $DModif): self
    {
        $this->DModif = $DModif;

        return $this;
    }

    public function getBloque(): ?int
    {
        return $this->Bloque;
    }

    public function setBloque(int $Bloque): self
    {
        $this->Bloque = $Bloque;

        return $this;
    }
}
