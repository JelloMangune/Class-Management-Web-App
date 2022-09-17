<?php

include "vendor/autoload.php";
include "config/database.php";

use Models\Connection;
use Models\Classes;

$connObj = new Connection($host, $database, $user, $password);
$connection = $connObj->connect();