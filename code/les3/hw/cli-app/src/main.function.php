<?php

function main(string $configPath)
{
    $config = readConfig($configPath);

    if (!$config) {
        return handleError("Невозможно подключить файл настроек");
    }

    $storageFileAddress = $config['storage']['address'];

    $functionName = parseComand();

    if (function_exists($functionName)) {
        return $functionName($storageFileAddress);

    } else {
        handleError("вызываемая функция не существует");
    }


}

function parseComand(): string
{
    $functionName = 'help';

    if (isset($_SERVER['argv'][1])) {
        $functionName = match ($_SERVER['argv'][1]) {
            "read" => "readUser",
            "add" => "addUser",
            "clear" => "clearUser",
            "del" => "del",
            "userday" => "userDay",
            default => "help"
        };
    }
    return $functionName;
}

