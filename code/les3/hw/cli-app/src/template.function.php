<?php

function handleError(string $errorText): string
{
    return "\033[31m" . $errorText . "\r\n \033[97m";
}

function help(): string
{
    $help = "Программа работы с файловым хранилищем";

    $help .= "Порядок вызовов \r\n\r\n";

    $help .= "php app.php [COMMAND] \r\n\r\n";

    $help .= "Доступные команды: \r\n";
    $help .= "read - вывести список всех пользователей \r\n";
    $help .= "add - добавить пользователя \r\n";
    $help .= "clear - очистить файл с пользователями \r\n";
    $help .= "help - вывести список команд \r\n";

    return $help;
}