<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * An ancillary.
 *
 * @ApiResource
 * @ORM\Entity
 */
class Ancillary
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
     * @var string The type of the ancillary.
     *
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var int The number of points that this ancillary gives you.
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $pointsGiven;

    /**
     * @var int The number of points needed for this ancillary to be free.
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $pointsNeeded;

    /**
     * @var int The value of the ancillary.
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $value;

    /**
     * @var string When the ancillary was used.
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var user[] Users that bought this ancillary.
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="ancillaries")
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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getPointsGiven()
    {
        return $this->pointsGiven;
    }

    /**
     * @param int $pointsGiven
     */
    public function setPointsGiven($pointsGiven)
    {
        $this->pointsGiven = $pointsGiven;
    }

    /**
     * @return int
     */
    public function getPointsNeeded()
    {
        return $this->pointsNeeded;
    }

    /**
     * @param int $pointsNeeded
     */
    public function setPointsNeeded($pointsNeeded)
    {
        $this->pointsNeeded = $pointsNeeded;
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
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return user[]
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param user[] $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}
