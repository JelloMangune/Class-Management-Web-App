<?php

include "../init.php";
use Models\ClassRoster;

$class_roster = new ClassRoster('PDC20', '21-20-25');
$class_roster->setConnection($connection);
$class_roster->save();
echo "<pre>";
var_dump($class_roster);
