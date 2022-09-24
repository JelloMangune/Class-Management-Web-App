<?php

include "../init.php";
use Models\TheClass;

$class = new TheClass('', '', '', '');
$class->setConnection($connection);
$class->getById(9);
$class->deleteClass();

var_dump($class);