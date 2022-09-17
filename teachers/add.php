<?php

include "../init.php";
use Models\Teacher;

$teacher = new Teacher('Karylle', 'Lopez', 'ckmalakas@gmail.com', '09123123', '20-20-20');
$teacher->setConnection($connection);
$teacher->save();
var_dump($teacher);
