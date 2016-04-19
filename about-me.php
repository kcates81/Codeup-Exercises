<?php

// example of switch statement with fall through
$value = true;

switch (gettype($value)) {
    case 'integer':
        echo '$value is an integer';
    case 'float':
        echo '$value is a float';
    case 'boolean':
        echo '$value is a boolean';
    case 'array':
        echo '$value is an array';
    case 'null':
        echo '$value is null';
    case 'string':
        echo '$value is a string';
}

// example of using a default case with fall through
switch(gettype($value)) {
    case 'string':
        echo '$value is a string';
    default:
        echo '$value is not a string';
}