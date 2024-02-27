<?php

function valiDate(string $inputData): bool
{
    if (preg_match('/^[0-3]?[0-9]-[0-1]?[0-9]-[0-9]{4}/', $inputData)) {
        return true;
    } else {
        return false;
    }

}