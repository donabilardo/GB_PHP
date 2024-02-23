<?php
$file_path = __DIR__ . '/users.txt';
$file_open = fopen($file_path, "rb"); //открываем файл для чтения

if (!file_exists($file_path) && !is_readable($file_path)) {
    echo "Файл не существует или нет доступа";
} else {
    $contents = [];
    while (!feof($file_open)) {
        array_push($contents, fgets($file_open,));
    }
    fclose($file_open);

    foreach ($contents as $name){
        echo $name;
    }
}



