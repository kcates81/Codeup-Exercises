<?php

$a = 5;
$b = 10;

// standard syntax
if ($a == $b) {
    echo "$a is equal to $b";
} else {
    echo "$a is not equal to $b";
}

// ternary operator 
echo $a == $b ? "$a is equal to $b" : "$a is not equal to $b\n";