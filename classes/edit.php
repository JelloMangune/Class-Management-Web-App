<?php

include "../init.php";
use Models\Classes;

$class = new Classes('', '', '', '');
$class->setConnection($connection);
$class->getById(4);
$class->updateClass('Arnold', 'Sample', 'ANL', 2);

var_dump($class);