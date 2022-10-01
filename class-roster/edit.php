<?php

include "../init.php";
use Models\ClassRoster;

$class_roster = new ClassRoster('', '');
$class_roster->setConnection($connection);
$class_roster->getById(1);
$class_roster->updateClassRoster('20-20', '20-07', false);

var_dump($class_roster);