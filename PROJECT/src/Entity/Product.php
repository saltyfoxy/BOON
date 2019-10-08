<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
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
    private $price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tags;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tag2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tag3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture5;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Store", inversedBy="product")
     */
    private $store;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Color", inversedBy="product")
     */
    private $color;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Type", inversedBy="product")
     */
    private $type;

    public function __construct()
    {
        $this->store = new ArrayCollection();
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

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;

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

    public function getTag2(): ?string
    {
        return $this->tag2;
    }

    public function setTag2(?string $tag2): self
    {
        $this->tag2 = $tag2;

        return $this;
    }

    public function getTag3(): ?string
    {
        return $this->tag3;
    }

    public function setTag3(?string $tag3): self
    {
        $this->tag3 = $tag3;

        return $this;
    }

    public function getPicture4(): ?string
    {
        return $this->picture4;
    }

    public function setPicture4(?string $picture4): self
    {
        $this->picture4 = $picture4;

        return $this;
    }

    public function getPicture5(): ?string
    {
        return $this->picture5;
    }

    public function setPicture5(?string $picture5): self
    {
        $this->picture5 = $picture5;

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

    /**
     * @return Collection|Store[]
     */
    public function getStore(): Collection
    {
        return $this->store;
    }

    public function addStore(Store $store): self
    {
        if (!$this->store->contains($store)) {
            $this->store[] = $store;
        }

        return $this;
    }

    public function removeStore(Store $store): self
    {
        if ($this->store->contains($store)) {
            $this->store->removeElement($store);
        }

        return $this;
    }

    public function getColor(): ?Color
    {
        return $this->color;
    }

    public function setColor(?Color $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        $this->type = $type;

        return $this;
    }
}
