<?php

include "../init.php";
use Models\Teacher;

$teacher = new Teacher('', '', '', '', '');
$teacher->setConnection($connection);
$teacher->getById(3);
$teacher->updateTeacher('Arnold', 'LIM', 'ANL', 'SADAS', 'ADSA');

var_dump($teacher);