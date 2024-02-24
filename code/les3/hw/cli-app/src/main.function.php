<?php

function main(string $configPath): string
{
    return $configPath;
}

function parseComand(): string
{
    $functionName = 'helpFunction';

    if (isset($_SERVER['argv'][1])) {
        $functionName = match ($_SERVER['argv'][1]) {
            "read" => "readUser",
            "add" => "adduser",
            "clear" => "clearUser",
            default => "help"
        };
    }
    return $functionName;
}

