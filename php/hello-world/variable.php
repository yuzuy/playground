<?php
$txt = 'Hello World!';
$name_of_txt = 'txt';
echo "$txt\n";
echo $$name_of_txt . "\n";
echo '\n' . "\n";
echo "${_ENV['PATH']}\n";
echo "${_SERVER['SERVER_ADDR']}\n";

foreach ($argv as $arg) {
    echo "$arg\n";
}
