<?php

include ("../init.php");
use Models\ClassRoster;

$class_roster = new ClassRoster('', '');
$class_roster->setConnection($connection);
$all_classes_rosters = $class_roster->getAllClassesRosters();
echo '<pre>';
var_dump($all_classes_rosters);
