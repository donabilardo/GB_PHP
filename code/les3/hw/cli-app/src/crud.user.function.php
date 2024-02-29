<?php
function del(string $address)
{
    $res = strtolower(readline("Введите ФИО для удаления пользователя:"));
//    $file = fopen($address, 'r+');


//    if (file_exists($address) && is_readable($address)) {
//        while (!feof($file)) {
//            echo fgets($file);
//        }
//    }else{
//        handleError("Не могу удалить запись");
//    }


    $file = new SplFileObject($address);
    $result = [];
    foreach ($file as $line => $text) {
        // echo ($file->key() + 1) . ': ' . $file->current();
        // echo "$line -> $text";
//      if (str_contains(strtolower($text), strtolower($res))){
//          echo "Запись $text найдена в строке $line";
//      }

        if (!str_contains(strtolower($text), strtolower($res))) {
            $result[] = $text;
        }
    }


    $file_open_for_write = fopen($address, "w");
    fwrite($file_open_for_write, '');

    foreach ($result as $line => $text) {
        fwrite($file_open_for_write, $text);
    }
    fclose($file_open_for_write);

}


function userDay($address)
{
    $birthdayUser = readline("Дата рождения в формате ДД-ММ-ГГГГ (23-02-2024): \r\n");
    if (valiDate($birthdayUser)) {

        $file = new SplFileObject($address);
        $result = [];
        foreach ($file as $line => $text) {
            if (str_contains(strtolower($text), strtolower($birthdayUser))) {
                $result[] = $text;
            }
        }

        if (count($result) != 0) {
            echo "В дату $birthdayUser родились следующие пользователи: \r\n";
            foreach ($result as $line => $text) {
               echo $text;
            }
        } else {
            echo "В дату $birthdayUser у наших пользователей нет дней рождения \r\n";
        }

    } else {
        handleError("Дата введена в неверном формате");
    }
}
