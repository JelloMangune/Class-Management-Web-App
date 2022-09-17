<?php

include ("../init.php");
use Models\Classes;

$class = new Classes('', '', '', '');
$class->setConnection($connection);
$all_classes = $class->getAllClasses();
var_dump($all_classes);
