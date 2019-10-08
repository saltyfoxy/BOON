<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StoreScheduleRepository")
 */
class StoreSchedule
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Store", mappedBy="schedule")
     */
    private $store;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Days", inversedBy="schedule")
     */
    private $days;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Schedule", inversedBy="schedule")
     */
    private $schedule;

    public function __construct()
    {
        $this->store = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $store->setSchedule($this);
        }

        return $this;
    }

    public function removeStore(Store $store): self
    {
        if ($this->store->contains($store)) {
            $this->store->removeElement($store);
            // set the owning side to null (unless already changed)
            if ($store->getSchedule() === $this) {
                $store->setSchedule(null);
            }
        }

        return $this;
    }

    public function getDays(): ?Days
    {
        return $this->days;
    }

    public function setDays(?Days $days): self
    {
        $this->days = $days;

        return $this;
    }

    public function getSchedule(): ?Schedule
    {
        return $this->schedule;
    }

    public function setSchedule(?Schedule $schedule): self
    {
        $this->schedule = $schedule;

        return $this;
    }
}
