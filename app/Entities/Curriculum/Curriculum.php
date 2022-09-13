<?php

namespace App\Entities\Curriculum;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="occupation", type="string")
 * @ORM\DiscriminatorMap({"student" = "Student", "teacher" = "Teacher"})
 */
class Curriculum
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected int $id;

    /**
     * @ORM\Column(type="string")
     */
    protected string $subject;

    /**
     * @ORM\Column(type="string")
     */
    protected string $name;

    public function __construct($name, $subject)
    {
        $this->name = $name;
        $this->subject = $subject;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of subject
     *
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * Set the value of subject
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}