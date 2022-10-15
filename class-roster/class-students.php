<?php

include ("../init.php");
use Models\ClassRoster;

$code = $_GET['code'];

$class_roster = new ClassRoster('', '');
$class_roster->setConnection($connection);
$class_students = $class_roster->getClassStudents($code);

$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader('../templates/class-roster')
]);

$template = $mustache->loadTemplate('class-students');
echo $template->render(compact('class_students', 'success'));