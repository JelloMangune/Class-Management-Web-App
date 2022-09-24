<?php

include "../init.php";
use Models\TheClass;

$class = new TheClass('', '', '', '');
$class->setConnection($connection);
$class->getById(15);
$class->updateClass('Arnold', 'Sample', 'ANL', '12');

var_dump($class);