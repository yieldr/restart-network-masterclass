<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * A user.
 *
 * @ApiResource
 * @ORM\Entity
 */
class User
{
    /**
     * @var int The id of this book.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     */
    private $id;

    /**
     * @var string The name of the user.
     *
     * @ORM\Column(type="string", length=125, nullable=false)
     *
     */
    private $name;

    /**
     * @var string The email of this user.
     *
     * @ORM\Column(type="string", length=125, nullable=false)
     *
     */
    private $email;

    /**
     * @var string The location where the user is.
     *
     * @ORM\Column(type="string", length=125, nullable=true)
     *
     */
    private $location;

    /**
     * @var \DateTimeInterface Last time that we saw the user.
     *
     * @ORM\Column(type="datetime", nullable=true)
     *
     */
    private $lastSeen;

    /**
     * @var int Number of points that the user has.
     *
     * @ORM\Column(type="integer", nullable=true, options={"default" = 0})
     *
     */
    private $points;

    /**
     * @var Ancillary[] Ancillary that this user bought.
     *
     * @ORM\OneToMany(targetEntity="Ancillary", mappedBy="user")
     */
    private $ancillaries;

    /**
     * @var Booking[] Bookings that this user made.
     *
     * @ORM\ManyToMany(targetEntity="Flight", inversedBy="users")
     */
    private $flights;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastSeen()
    {
        return $this->lastSeen;
    }

    /**
     * @param \DateTimeInterface $lastSeen
     */
    public function setLastSeen($lastSeen)
    {
        $this->lastSeen = $lastSeen;
    }

    /**
     * @return Ancillary[]
     */
    public function getAncillaries()
    {
        return $this->ancillaries;
    }

    /**
     * @param Ancillary[] $ancillaries
     */
    public function setAncillaries($ancillaries)
    {
        $this->ancillaries = $ancillaries;
    }

    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return Booking[]
     */
    public function getFlights()
    {
        return $this->flights;
    }

    /**
     * @param Booking[] $flights
     */
    public function setFlights($flights)
    {
        $this->flights = $flights;
    }
}
