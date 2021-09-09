<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitsRepository::class)
 */
class Produits
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ProId;

    /**
     * @ORM\Column(type="integer")
     */
    private $ProCatID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ProRef;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ProLibelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ProDescription;

    /**
     * @ORM\Column(type="integer")
     */
    private $ProPrix;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ProStock;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ProCouleur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProId(): ?int
    {
        return $this->ProId;
    }

    public function setProId(int $ProId): self
    {
        $this->ProId = $ProId;

        return $this;
    }

    public function getProCatID(): ?int
    {
        return $this->ProCatID;
    }

    public function setProCatID(int $ProCatID): self
    {
        $this->ProCatID = $ProCatID;

        return $this;
    }

    public function getProRef(): ?string
    {
        return $this->ProRef;
    }

    public function setProRef(string $ProRef): self
    {
        $this->ProRef = $ProRef;

        return $this;
    }

    public function getProLibelle(): ?string
    {
        return $this->ProLibelle;
    }

    public function setProLibelle(?string $ProLibelle): self
    {
        $this->ProLibelle = $ProLibelle;

        return $this;
    }

    public function getProDescription(): ?string
    {
        return $this->ProDescription;
    }

    public function setProDescription(?string $ProDescription): self
    {
        $this->ProDescription = $ProDescription;

        return $this;
    }

    public function getProPrix(): ?int
    {
        return $this->ProPrix;
    }

    public function setProPrix(int $ProPrix): self
    {
        $this->ProPrix = $ProPrix;

        return $this;
    }

    public function getProStock(): ?int
    {
        return $this->ProStock;
    }

    public function setProStock(?int $ProStock): self
    {
        $this->ProStock = $ProStock;

        return $this;
    }

    public function getProCouleur(): ?string
    {
        return $this->ProCouleur;
    }

    public function setProCouleur(string $ProCouleur): self
    {
        $this->ProCouleur = $ProCouleur;

        return $this;
    }
}
