<?php
function add($x, $y)
{
    return $x + $y;
}

$result = add(1, 2);
echo "$result\n";
// invalid
// echo "${add(1, 2)}\n";

function greet($name, $phrase = 'Hello')
{
    echo "$phrase $name!\n";
}

greet('John');
greet('Jack', 'Konnichiha');

function argTest($a, $b = 'b', $c) 
{
    echo "\$a => $a, \$b => $b, \$c => $c\n";
}

argTest('x', 'y', 'z');
// invalid
// argTest('x', 'z');
// argTest('x', , 'z');

function retArray()
{
    return ['A', 'B', 'C'];
}
list($a, $b, $c) = retArray();
echo "$a $b $c\n";

$global_var = 10;
function updateGlobalVar($v) 
{
    global $global_var;
    $global_var = $v;
}
updateGlobalVar(5);
echo "$global_var\n";

function setValue(&$var, $value) 
{
    $var = $value;
}
$ref = 'A';
setValue($ref, 'Z');
echo "$ref\n";

function variableLengthArgs() 
{
    foreach (func_get_args() as $arg) {
        echo "$arg\n";
    }
}
variableLengthArgs('A', 'B', 'C');

$printHello = function() 
{
    echo "Hello\n";
};
$printHello();
