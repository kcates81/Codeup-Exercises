<?php

// function example
function sayHello()
{
    return "Hello Codeup!\n";
}

echo sayHello();

// this function illustrates the limitations of using echo within a function
function add($a, $b)
{
    return $a + $b.PHP_EOL;
}

var_dump(add(5,12) * add(6, 4)).PHP_EOL;
