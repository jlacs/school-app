<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Entities\Curriculum\Student;
use App\Entities\Curriculum\Teacher;
use App\Entities\Curriculum\Curriculum;
use Doctrine\ORM\EntityManagerInterface;

class CurriculumController extends Controller
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function index()
    {
        $curriculums = $this->em->getRepository(Student::class)->findAll();
        
        foreach($curriculums as $curriculum) {
            (object) $curriculum = (object) [
                'id' => $curriculum->getId(),
                'firstname' => $curriculum->getName(),
                'lastname' => $curriculum->getSubject()
            ];
        }

        dd($curriculums);

        return view('curriculums', [
            'curriculums' => $curriculum,
        ]);
    }
}
