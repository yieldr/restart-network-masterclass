<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
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
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Flight", inversedBy="users").
     */
    private $flight;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="flights")
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
    public function getFlights()
    {
        return $this->flight;
    }

    /**
     * @param mixed $flight
     */
    public function setFlights($flight)
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
