<?php

$file_path = __DIR__ . '/users.txt';

$name = readline("Имя пользователя: ");
$birthday = readline("Дата рождения пользователя: ");

$data_for_write = $name . ", " . $birthday . "\r\n";

$data_arr = json_encode([
    'name' => $name,
    'birthday' => $birthday
]);

//echo $data_arr;


$file_handler = fopen($file_path, "a");

if (fwrite($file_handler, $data_for_write)) {
    echo "Данные успешно записаны";
} else {
    echo "Ошибка добавления данных";
}
fclose($file_handler);