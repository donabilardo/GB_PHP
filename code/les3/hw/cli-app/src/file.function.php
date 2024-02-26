<?php

function readUser(string $address)
{
    if (file_exists($address) && is_readable($address)) {
        $file = fopen($address, "rb");
        $contents = '';
        while (!feof($file)) {
            $contents .= fgets($file,);
        }
        fclose($file);
        return $contents;

    } else {
        return handleError("Файл не существует");
    }
}


function addUser(string $address): string
{

    $nameUser = '';
    $checkName = false;
    while (!$checkName) {
        $nameUser = readline("Введите имя пользователя в формате Иванов Иван Иванович: \r\n");
        if (preg_match("/^\d+$/", $nameUser)) {
            echo handleError("Имя пользователя введено некорректно");
        } else {
            $checkName = true;
        }
    }

    $birthdayUser = '';
    $checkData = false;
    while (!$checkData) {
        $birthdayUser = readline("Дата рождения в формате ДД-ММ-ГГГГ (23-02-2024): ");
        if (preg_match("/^(0[1-9]|[12][0-9]|3[01])[\.](0[1-9]|1[012])[\.](19|20)\d\d$/", $birthdayUser)) {
            $birthdayUser = true;
        } else {
            echo handleError("Дата рождения, введена некорректно");
        }
    }

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

