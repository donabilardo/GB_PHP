<?php
function del(string $address)
{
    $res = readline("Введите ФИО для удаления пользователя:");

    $file = fopen($address, 'r+');
    if (file_exists($address) && is_readable($address)) {
        while (!feof($file)) {
            echo fgets($file);
        }
    }else{
        handleError("Не могу удалить запись");
    }


}