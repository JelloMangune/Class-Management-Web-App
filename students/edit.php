<?php

include "../init.php";
use Models\Student;

$student = new Student('', '', '', '', '', '');
$student->setConnection($connection);
$student->getById(5);
$student->updatestudent('David', 'Echon', 'david@gmail.com', '2132131', 'BSCS', '10-10-10');
var_dump($student);