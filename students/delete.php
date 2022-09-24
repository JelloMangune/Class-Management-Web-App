<?php

include "../init.php";
use Models\Student;

$student = new Student('', '', '', '', '', '');
$student->setConnection($connection);
$student->getById(2);
$student->deletestudent();

var_dump($student);