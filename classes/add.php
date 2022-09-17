<?php

include "../init.php";
use Models\Classes;

$class = new Classes('Jello', 'Pogi', 'JPM15', '2');
$class->setConnection($connection);
$class->save();
var_dump($add);
