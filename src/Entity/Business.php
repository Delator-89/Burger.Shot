<?php
// src/Entity/Business.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Business
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private string $name;

    #[ORM\Column(length: 50)]
    private string $coords;

    #[ORM\ManyToOne(inversedBy: 'businesses')]
    #[ORM\JoinColumn(nullable: false)]
    private Zone $zone;

    public function getId(): ?int { return $this->id; }

    public function getName(): string { return $this->name; }
    public function setName(string $name): self { $this->name = $name; return $this; }

    public function getCoords(): string { return $this->coords; }
    public function setCoords(string $coords): self { $this->coords = $coords; return $this; }

    public function getZone(): Zone { return $this->zone; }
    public function setZone(Zone $zone): self { $this->zone = $zone; return $this; }
}