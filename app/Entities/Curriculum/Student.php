<?php

namespace App\Entities\Curriculum;

use Doctrine\ORM\Mapping AS ORM;
use App\Entities\Curriculum\Curriculum;

/**
 * @ORM\Entity
 */
class Student extends Curriculum
{
    /**
     * @ORM\Column(type="string")
     */
    protected string $grade;

    /**
     * @ORM\Column(type="string")
     */
    protected string $course;

    public function __construct($grade, $course)
    {
        $this->grade = $grade;
        $this->course = $course;
    }

    /**
     * Get the value of course
     *
     * @return string
     */
    public function getCourse(): string
    {
        return $this->course;
    }

    /**
     * Set the value of course
     *
     * @param string $course
     *
     * @return self
     */
    public function setCourse(string $course): self
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get the value of grade
     *
     * @return string
     */
    public function getGrade(): string
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @param string $grade
     *
     * @return self
     */
    public function setGrade(string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }
}