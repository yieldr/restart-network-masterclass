<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * A flight.
 *
 * @ApiResource
 * @ORM\Entity
 */
class Booking
{
    /**
     * @var int The id of this book.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @Assert\Blank
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Flight", inversedBy="users").
     */
    private $flight;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="bookings")
     */
    private $user;

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
     * @return Flight
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * @param mixed $flight
     */
    public function setFlight($flight)
    {
        $this->flight = $flight;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUsers($user)
    {
        $this->user = $user;
    }
}
