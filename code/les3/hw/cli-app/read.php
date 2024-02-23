<?php

$file_path = __DIR__ . '/users.txt';
$file_open = fopen($file_path, "rb" );
$data = fgets($file_open, );
fclose($file_open);
echo $data;
