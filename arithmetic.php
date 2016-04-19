<?php

function add($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "DANGER! DANGER, WILL ROBINSON! Something is wrong with either {$a} or {$b}!\n";
    } 
}

function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "DANGER! DANGER, WILL ROBINSON! Something is wrong with either {$a} or {$b}!\n";
    }
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "DANGER! DANGER, WILL ROBINSON! Something is wrong with either {$a} or {$b}!\n";
    }
}

function divide($a, $b)
{  
    if ($b == 0) {
        return "Uhuh...you can't do that!\n";
    }elseif (is_numeric($a) && is_numeric($b)){
        return $a / $b;
    } else{
        return "DANGER! DANGER, WILL ROBINSON! Something is wrong with either {$a} or {$b}!\n";
    }
}

function modulus ($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return "DANGER! DANGER, WILL ROBINSON! Something is wrong with either {$a} or {$b}!\n";
    }
}

// Add code to test your functions here

echo add(5, '5').PHP_EOL;

echo subtract(5, false).PHP_EOL;

echo multiply(5, 'poop').PHP_EOL;

echo divide(5, 0). PHP_EOL;

echo modulus(true, 5). PHP_EOL;