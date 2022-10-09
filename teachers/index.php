<?php

include ("../init.php");
use Models\Teacher;

$success = $_GET['success'] ?? null;
$error = $_GET['error'] ?? null;

$teacher = new Teacher('', '', '', '', '');
$teacher->setConnection($connection);
$all_teachers = $teacher->getAllTeachers();
#var_dump($all_teachers);

if ($success==1){
	$success  = "Successfully Added! x";
}
if ($success==2){
	$success  = "Successfully Updated! x";
}

if ($success==3){
	$success  = "Successfully Deleted! x";
}


$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader('../templates/teachers')
]);

$template = $mustache->loadTemplate('index');
echo $template->render(compact('all_teachers', 'success'));