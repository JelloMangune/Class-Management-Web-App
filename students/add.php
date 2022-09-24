<?php

include "../init.php";
use Models\Student;

$student = new Student('John', 'Doe', 'sasafaa@gmail.com', '091213313', 'BSIT', '22-22-22');
$student->setConnection($connection);
$student->save();
echo "<pre>";
var_dump($student);
