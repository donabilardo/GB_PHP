<?php

//require_once ('src/main.function.php');
//require_once ('src/template.function.php');
//require_once ('src/file.function.php');

setlocale(LC_ALL, "ru_RU.UTF-8");

require_once('vendor/autoload.php');

$result = main('config.ini');

echo $result;

