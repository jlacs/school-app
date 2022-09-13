<?php

namespace App\Entities\Person;

use Doctrine\ORM\Mapping AS ORM;
use App\Entities\Person\Person;

/**
 * @ORM\Entity
 */
class Student extends Person
{
    /**
     * @ORM\Column(type="string")
     */
    protected string $tuition;

    public function __construct($tuition)
    {
        $this->tuition = $tuition;
    }

    /**
     * Get the value of tuition_fee
     *
     * @return string
     */
    public function getTuition(): string
    {
        return $this->tuition_fee;
    }

    /**
     * Set the value of tuition_fee
     *
     * @param string $tuition_fee
     *
     * @return self
     */
    public function setTuition(string $tuition_fee): self
    {
        $this->tuition_fee = $tuition_fee;

        return $this;
    }
}