<?php

include "../init.php";
use Models\Teacher;

$teacher = new Teacher('', '', '', '', '');
$teacher->setConnection($connection);
$teacher->getById(1);
$teacher->deleteTeacher();

var_dump($teacher);