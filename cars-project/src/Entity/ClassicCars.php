<?php

namespace App\Entity;
use App\Repository\ClassicCarRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * ClassicCars
 *
 * @ORM\Table(name="classic_cars")
 * @ORM\Entity(repositoryClass="App\Repository\ClassicCarsRepository")
 */
class ClassicCars
{
    /**
     * @var int
     *
     * @ORM\Column(name="cls_cars_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clsCarsId;

    /**
     * @var bool
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=20, nullable=false)
     */
    private $brand;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=200, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=false)
     */
    private $location;

    public function getClsCarsId(): ?int
    {
        return $this->clsCarsId;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): self
    {
        $this->available = $available;

        return $this;
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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }


}
