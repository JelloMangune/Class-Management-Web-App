<?php

include "../init.php";
use Models\Teacher;

$teacher = new Teacher('Adriane', 'Castro', 'castro@gmail.com', '0966123538', '30-30');
$teacher->setConnection($connection);
$teacher->save();
var_dump($teacher);
