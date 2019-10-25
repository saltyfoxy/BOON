<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StoreRepository")
 */
class Store
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $longitude;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture3;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\City", inversedBy="store")
     */
    private $city;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Product", mappedBy="store")
     */
    private $product;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Monday;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Tuesday;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Wednesday;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Thursday;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Friday;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Saturday;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Sunday;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="stores")
     */
    private $user;





    public function __construct()
    {
        $this->product = new ArrayCollection();
        $this->user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture1(): ?string
    {
        return $this->picture1;
    }

    public function setPicture1(?string $picture1): self
    {
        $this->picture1 = $picture1;

        return $this;
    }

    public function getPicture2(): ?string
    {
        return $this->picture2;
    }

    public function setPicture2(?string $picture2): self
    {
        $this->picture2 = $picture2;

        return $this;
    }

    public function getPicture3(): ?string
    {
        return $this->picture3;
    }

    public function setPicture3(?string $picture3): self
    {
        $this->picture3 = $picture3;

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProduct(): Collection
    {
        return $this->product;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->product->contains($product)) {
            $this->product[] = $product;
            $product->addStore($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->product->contains($product)) {
            $this->product->removeElement($product);
            $product->removeStore($this);
        }

        return $this;
    }

    public function getMonday(): ?string
    {
        return $this->Monday;
    }

    public function setMonday(?string $Monday): self
    {
        $this->Monday = $Monday;

        return $this;
    }

    public function getTuesday(): ?string
    {
        return $this->Tuesday;
    }

    public function setTuesday(?string $Tuesday): self
    {
        $this->Tuesday = $Tuesday;

        return $this;
    }

    public function getWednesday(): ?string
    {
        return $this->Wednesday;
    }

    public function setWednesday(?string $Wednesday): self
    {
        $this->Wednesday = $Wednesday;

        return $this;
    }

    public function getThursday(): ?string
    {
        return $this->Thursday;
    }

    public function setThursday(?string $Thursday): self
    {
        $this->Thursday = $Thursday;

        return $this;
    }

    public function getFriday(): ?string
    {
        return $this->Friday;
    }

    public function setFriday(?string $Friday): self
    {
        $this->Friday = $Friday;

        return $this;
    }

    public function getSaturday(): ?string
    {
        return $this->Saturday;
    }

    public function setSaturday(?string $Saturday): self
    {
        $this->Saturday = $Saturday;

        return $this;
    }

    public function getSunday(): ?string
    {
        return $this->Sunday;
    }

    public function setSunday(?string $Sunday): self
    {
        $this->Sunday = $Sunday;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(User $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
        }

        return $this;
    }


    public function __toString()
    {
        return (string) $this->user;
    }



}
