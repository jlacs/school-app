<?php

namespace App\Entities\Person;

use Doctrine\ORM\Mapping AS ORM;
use App\Entities\Person\Person;

/**
 * @ORM\Entity
 */
class Teacher extends Person
{
    /**
     * @ORM\Column(type="string")
     */
    protected string $salary;

    public function __construct($salary)
    {
        $this->salary = $salary;
    }

    /**
     * Get the value of salary
     *
     * @return string
     */
    public function getSalary(): string
    {
        return $this->salary;
    }

    /**
     * Set the value of salary
     *
     * @param string $salary
     *
     * @return self
     */
    public function setSalary(string $salary): self
    {
        $this->salary = $salary;

        return $this;
    }
}