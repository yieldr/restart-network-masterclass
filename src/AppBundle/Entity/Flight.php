<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * A flight.
 *
 * @ApiResource
 * @ORM\Entity
 */
class Flight
{
    /**
     * @var int The id of this book.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The flight number of this flight.
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $number;

    /**
     * @var int The number of the seats that the flight has.
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $seats;

    /**
     * @var int The number of the seats that are available for the flight.
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $seatsAvailable;

    /**
     * @var string The origin of the flight.
     *
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $origin;

    /**
     * @var string The destination of the flight.
     *
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $destination;

    /**
     * @var \DateTimeInterface The scheduled departure time of the flight.
     *
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $scheduledDepartureTime;

    /**
     * @var \DateTimeInterface The actual departure time of the flight.
     *
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    private $departureTime;

    /**
     * @var int The value of the flight.
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $value;

    /**
     * @var User[] Users that bought this flight.
     *
     * @ORM\OneToMany(targetEntity="Booking", mappedBy="flight")
     */
    private $users;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * @param int $seats
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getScheduledDepartureTime()
    {
        return $this->scheduledDepartureTime;
    }

    /**
     * @param \DateTimeInterface $scheduledDepartureTime
     */
    public function setScheduledDepartureTime($scheduledDepartureTime)
    {
        $this->scheduledDepartureTime = $scheduledDepartureTime;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * @param \DateTimeInterface $departureTime
     */
    public function setDepartureTime($departureTime)
    {
        $this->departureTime = $departureTime;
    }

    /**
     * @return int
     */
    public function getSeatsAvailable()
    {
        return $this->seatsAvailable;
    }

    /**
     * @param int $seatsAvailable
     */
    public function setSeatsAvailable($seatsAvailable)
    {
        $this->seatsAvailable = $seatsAvailable;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param User[] $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }
}
