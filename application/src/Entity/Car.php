<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\CarRepository")
 *
 * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
 */
class Car
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
     */
    private $brand;

    /**
     * @ORM\Column(type="integer")
     *
     * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
     */
    private $color;

    /**
     * @ORM\Column(type="integer")
     *
     * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
     */
    private $doors;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getDoors(): ?int
    {
        return $this->doors;
    }

    public function setDoors(int $doors): self
    {
        $this->doors = $doors;

        return $this;
    }
}
