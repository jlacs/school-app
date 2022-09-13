<?php

use Illuminate\Support\Facades\Route;
use App\Entities\Person\Student;
use App\Entities\Person\Teacher;
use App\Entities\Curriculum\Curriculum;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\CurriculumController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('curriculum', [CurriculumController::class, 'index']);
Route::get('student', [PersonController::class, 'displayStudent']);
Route::get('teacher', [PersonController::class, 'displayTeacher']);

Route::get('new-curriculum', function (\Doctrine\ORM\EntityManagerInterface $em) {
    $student = new Student('2.5', 'BSME');
    $student->setName('Tony Stark');
    $student->setSubject('Physics');

    $em->persist($student);
    $em->flush();

    return 'added curriculum!';
});

Route::get('new-student', function (\Doctrine\ORM\EntityManagerInterface $em) {
    $student = new Student('15000');
    $student->setfirstname('Steve');
    $student->setlastname('Rogers');

    $em->persist($student);
    $em->flush();

    return 'added student!';
});

Route::get('new-teacher', function (\Doctrine\ORM\EntityManagerInterface $em) {
    $teacher = new Teacher('55000');
    $teacher->setfirstname('Albert');
    $teacher->setlastname('Einstein');

    $em->persist($teacher);
    $em->flush();

    return 'added teacher!';
});