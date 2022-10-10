<?php

include "vendor/autoload.php";
include "config/database.php";

use Models\Connection;
use Models\TheClass;
use Models\Teacher;
use Models\Student;

$connObj = new Connection($host, $database, $user, $password);
$connection = $connObj->connect();

$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader('../templates')
]);

$success = $_GET['success'] ?? null;
$error = $_GET['error'] ?? null;

if ($success==1){
	$success  = "Successfully Added! x";
}
if ($success==2){
	$success  = "Successfully Updated! x";
}

if ($success==3){
	$success  = "Successfully Deleted! x";
}