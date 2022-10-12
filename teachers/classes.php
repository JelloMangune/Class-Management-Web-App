<?php

include "../init.php";
use Models\Teacher;

$id = $_GET['id']??null;

$teacher = new Teacher('', '', '', '', '');
$teacher->setConnection($connection);
$teacher->getById($id);
$teacher_name = $teacher->getFirstName() . ' ' . $teacher->getLastName();
$teacher_number = $teacher->getEmployeeNumber();
$teacher_classes = $teacher->getClasses();

$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader('../templates/teachers')
]);

$template = $mustache->loadTemplate('classes');
echo $template->render(compact('teacher_classes', 'teacher_number', 'teacher_name'));

