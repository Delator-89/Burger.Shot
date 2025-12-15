<?php
// src/Entity/Zone.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
class Zone
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private string $name;

    #[ORM\Column(length: 50)]
    private string $centerCoords;

    #[ORM\OneToMany(mappedBy: 'zone', targetEntity: Business::class)]
    private Collection $businesses;

    public function __construct()
    {
        $this->businesses = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getName(): string { return $this->name; }
    public function setName(string $name): self { $this->name = $name; return $this; }

    public function getCenterCoords(): string { return $this->centerCoords; }
    public function setCenterCoords(string $coords): self { $this->centerCoords = $coords; return $this; }

    public function getBusinesses(): Collection
    {
        return $this->businesses;
    }
}
