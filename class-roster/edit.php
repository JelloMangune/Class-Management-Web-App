<?php

include "../init.php";
use Models\ClassRoster;

$class_roster = new ClassRoster('', '');
$class_roster->setConnection($connection);
$class_roster->getById(4);
date_default_timezone_set('Asia/Manila');
$datee = date('Y-m-d H:i:s');
#$class_roster->updateClassRoster('20-20', '20-07', true, $datee);

#var_dump($class_roster);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="sample.php" method="POST">
    <label for="meeting-time">Choose a time for your appointment:</label>
    <input type="datetime-local" id="enrolled_at"
        name="enrolled_at" value="2018-06-12T19:30">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>