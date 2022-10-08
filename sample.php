<?php

include "vendor/autoload.php";

$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')
]);

$students = [
    "Karylle",
    "Jesel",
    "Calvin Kent",
    "Aki",
    "Ron Russelle",
    "Stephanie",
    "Ryan Matthew"
];

$template = $mustache->loadTemplate('sample');
echo $template->render(compact('students'));