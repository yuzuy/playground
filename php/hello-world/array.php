<?php
$array = ['A', 'B', 'C'];
echo "$array[0]\n";
echo "$array[1]\n";
echo "$array[2]\n";
foreach ($array as $value) {
    echo "$value\n";
}

$associative_array = [
    'A' => 'Apple',
    'B' => 'Banana',
    'C' => 'Cocoa',
];
echo "${associative_array['A']}\n";
echo "${associative_array['B']}\n";
echo "${associative_array['C']}\n";
foreach ($associative_array as $key => $value) {
    echo "$key => $value\n";
}

$mix = [1, 1.5, 'A', true];
foreach ($mix as $value) {
    echo "$value\n";
}
