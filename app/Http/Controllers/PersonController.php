<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Entities\Person\Student;
use App\Entities\Person\Teacher;
use App\Entities\Person\Person;
use Doctrine\ORM\EntityManagerInterface;

class PersonController extends Controller
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function displayStudent()
    {
        $persons = $this->em->getRepository(Student::class)->findAll();

        dd($persons);
    }

    public function displayTeacher()
    {
        $persons = $this->em->getRepository(Teacher::class)->findAll();

        dd($persons);
    }
}
