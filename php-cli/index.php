<?php
$test = 'Hello from php in docker';

echo $test;

//docker run --rm -v ${pwd}/php-cli:/cli php:8.2-cli php /cli/index.php