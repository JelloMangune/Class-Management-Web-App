<?php

include ("../init.php");
use Models\TheClass;

$class = new TheClass('', '', '', '');
$class->setConnection($connection);
$all_classes = $class->getAllClasses();
var_dump($all_classes);
