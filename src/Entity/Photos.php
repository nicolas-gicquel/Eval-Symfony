<?php

namespace App\Entity;

use App\Repository\PhotosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhotosRepository::class)
 */
class Photos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $altPhoto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $namePhoto;

    /**
     * @ORM\Column(type="boolean")
     */
    private $majorPhoto;

    /**
     * @ORM\ManyToOne(targetEntity=Products::class, inversedBy="photos")
     */
    private $product;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAltPhoto(): ?string
    {
        return $this->altPhoto;
    }

    public function setAltPhoto(?string $altPhoto): self
    {
        $this->altPhoto = $altPhoto;

        return $this;
    }

    public function getNamePhoto(): ?string
    {
        return $this->namePhoto;
    }

    public function setNamePhoto(string $namePhoto): self
    {
        $this->namePhoto = $namePhoto;

        return $this;
    }

    public function getMajorPhoto(): ?bool
    {
        return $this->majorPhoto;
    }

    public function setMajorPhoto(bool $majorPhoto): self
    {
        $this->majorPhoto = $majorPhoto;

        return $this;
    }

    public function getProduct(): ?Products
    {
        return $this->product;
    }

    public function setProduct(?Products $product): self
    {
        $this->product = $product;

        return $this;
    }
}
