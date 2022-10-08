<?php

include "../init.php";
use Models\TheClass;

$class = new TheClass('Professional Domain Course', 'Lorem Ipsum some description', 'PDC10', '10-10');
$class->setConnection($connection);
$class->save();
var_dump($class);
