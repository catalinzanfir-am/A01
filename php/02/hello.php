<?php

function add($a, $b) { echo $a + $b; }
function substract($a, $b) { echo $a - $b; }
function divide($a, $b) {echo $a / $b; }
function multiply($a, $b) {echo $a * $b; }

function calculator($a, $b, $sign)
{
    switch($sign) {
        case '+':
            add($a, $b);
            break;
        case '-':
            substract($a, $b);
            break;
        case '*':
            multiply($a, $b);
            break;
        case '/':
            divide($a, $b);
            break;
        default:
            print_r("Operation {$sign} not recognized");
    }
}

function compute($operation)
{
    $operators = str_split($operation);

    calculator($operators[0],$operators[2],$operators[1]);
}
echo PHP_EOL.PHP_EOL;


compute('7/0');

implode([]);
echo PHP_EOL.PHP_EOL;