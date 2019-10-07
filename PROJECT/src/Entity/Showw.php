<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShowwRepository")
 */
class Showw
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="text")
     */
    private $Adress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Picture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DetailPicture1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DetailPicture2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DetailPicture3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DetailPicture4;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="showws")
     */
    private $showw;

    public function __construct()
    {
        $this->showw = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adress): self
    {
        $this->Adress = $Adress;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->Price;
    }

    public function setPrice(string $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->Date;
    }

    public function setDate(string $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->Picture;
    }

    public function setPicture(string $Picture): self
    {
        $this->Picture = $Picture;

        return $this;
    }

    public function getDetailPicture1(): ?string
    {
        return $this->DetailPicture1;
    }

    public function setDetailPicture1(string $DetailPicture1): self
    {
        $this->DetailPicture1 = $DetailPicture1;

        return $this;
    }

    public function getDetailPicture2(): ?string
    {
        return $this->DetailPicture2;
    }

    public function setDetailPicture2(string $DetailPicture2): self
    {
        $this->DetailPicture2 = $DetailPicture2;

        return $this;
    }

    public function getDetailPicture3(): ?string
    {
        return $this->DetailPicture3;
    }

    public function setDetailPicture3(string $DetailPicture3): self
    {
        $this->DetailPicture3 = $DetailPicture3;

        return $this;
    }

    public function getDetailPicture4(): ?string
    {
        return $this->DetailPicture4;
    }

    public function setDetailPicture4(string $DetailPicture4): self
    {
        $this->DetailPicture4 = $DetailPicture4;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getShoww(): Collection
    {
        return $this->showw;
    }

    public function addShoww(User $showw): self
    {
        if (!$this->showw->contains($showw)) {
            $this->showw[] = $showw;
        }

        return $this;
    }

    public function removeShoww(User $showw): self
    {
        if ($this->showw->contains($showw)) {
            $this->showw->removeElement($showw);
        }

        return $this;
    }

    public function __toString()
    {
        return (string) $this->showw;
    }
}
