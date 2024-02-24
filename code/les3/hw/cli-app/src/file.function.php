<?php

function readUser(string $address)
{
    if (file_exists($address) && is_readable($address)) {
        $file = fopen($address, "rb");
        $contents = '';
        while (!feof($file)) {
            $contents .= fgets($file, );
        }
        fclose($file);
        return $contents;

    } else {
        return handleError("Файл не существует");
    }
}


function addUser(string $address): string
{
    $nameUser = readline("Имя пользователя: ");
    $birthdayUser = readline("Дата рождения в формате ДД-ММ-ГГГГ (23-02-2024): ");
    $dataUser = $nameUser . ", " . "$birthdayUser \r\n";

    $file_open = fopen($address, "a"); //открываем файл для записи

    if (fwrite($file_open, $dataUser)) {
        return "Запись $dataUser успешно добавлена в БД";
    } else {
        return handleError("Произошла ошибка при добавлении записи, данные не сохранены");
    }
    fclose($file_open);
}

function clearUser(string $address)
{
    if (file_exists($address) && is_readable($address)) {
        $file_open = fopen($address, "w"); //открываем файл для записи
        fwrite($file_open, '');
        fclose($file_open);
        return ("Файл очищен от записей");
    } else {
        return handleError("Произошла ошибка при очистки записей");
    }
}

//function help()
//{
//    return handleError();
//}

function readConfig(string $configAddress)
{
    return parse_ini_file($configAddress, true);
}

