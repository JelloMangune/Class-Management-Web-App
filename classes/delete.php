<?php

include "../init.php";
use Models\Classes;

$class = new Classes('', '', '', '');
$class->setConnection($connection);
$class->getById(1);
$class->deleteClass();

var_dump($class);