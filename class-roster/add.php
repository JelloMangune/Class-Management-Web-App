<?php

include "../init.php";
use Models\ClassRoster;
use Models\Student;
use Models\Teacher;

$code = $_GET['code']??null;

$student= new Student('', '', '', '', '', '');
$student->setConnection($connection);
$all_students = $student->getAllStudents();

$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader('../templates/class-roster')
]);

$template = $mustache->loadTemplate('add');
echo $template->render(compact('all_students', 'code'));

try {
    if(isset($_POST['student_number'])){
        $class_roster = new ClassRoster($_POST['code'], $_POST['student_number']);
        $class_roster->setConnection($connection);
        $class_roster->save();
        echo "<script>window.location.href='index.php?success=1';</script>";
        exit();
    }
} catch (Exception $e) {
    
    exit();
}


