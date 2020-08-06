<?php

namespace App\Entity;
use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Booking
 *
 * @ORM\Table(name="booking", indexes={@ORM\Index(name="booking_ibfk_2", columns={"cls_cars_id"}), @ORM\Index(name="booking_ibfk_1", columns={"userId"})})
 * @ORM\Entity(repositoryClass="App\Repository\BookingRepository")
 */
class Booking
{
    /**
     * @var int
     *
     * @ORM\Column(name="booking_Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bookingId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="booking_date_start", type="date", nullable=false)
     */
    private $bookingDateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="booking_date_end", type="date", nullable=false)
     */
    private $bookingDateEnd;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userId", referencedColumnName="userId")
     * })
     */
    private $userid;

    /**
     * @var \ClassicCars
     *
     * @ORM\ManyToOne(targetEntity="ClassicCars")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cls_cars_id", referencedColumnName="cls_cars_id")
     * })
     */
    private $clsCars;

    public function getBookingId(): ?int
    {
        return $this->bookingId;
    }

    public function getBookingDateStart(): ?\DateTimeInterface
    {
        return $this->bookingDateStart;
    }

    public function setBookingDateStart(\DateTimeInterface $bookingDateStart): self
    {
        $this->bookingDateStart = $bookingDateStart;

        return $this;
    }

    public function getBookingDateEnd(): ?\DateTimeInterface
    {
        return $this->bookingDateEnd;
    }

    public function setBookingDateEnd(\DateTimeInterface $bookingDateEnd): self
    {
        $this->bookingDateEnd = $bookingDateEnd;

        return $this;
    }

    public function getUserid(): ?Users
    {
        return $this->userid;
    }

    public function setUserid(?Users $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getClsCars(): ?ClassicCars
    {
        return $this->clsCars;
    }

    public function setClsCars(?ClassicCars $clsCars): self
    {
        $this->clsCars = $clsCars;

        return $this;
    }


}
