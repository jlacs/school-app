<?php

namespace App\Entities\Curriculum;

use Doctrine\ORM\Mapping AS ORM;
use App\Entities\Curriculum\Curriculum;

/**
 * @ORM\Entity
 */
class Teacher extends Curriculum
{
    /**
     * @ORM\Column(type="string")
     */
    protected string $room;

    /**
     * @ORM\Column(type="string")
     */
    protected string $building;

    public function __construct($room, $building)
    {
        $this->room = $room;
        $this->building = $building;
    }

    /**
     * Get the value of room
     *
     * @return string
     */
    public function getRoom(): string
    {
        return $this->room;
    }

    /**
     * Set the value of room
     *
     * @param string $room
     *
     * @return self
     */
    public function setRoom(string $room): self
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get the value of building
     *
     * @return string
     */
    public function getBuilding(): string
    {
        return $this->building;
    }

    /**
     * Set the value of building
     *
     * @param string $building
     *
     * @return self
     */
    public function setBuilding(string $building): self
    {
        $this->building = $building;

        return $this;
    }
}