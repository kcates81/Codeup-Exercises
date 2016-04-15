<?php
//  this do-while loop counts by 2's starting at 0

$a = -2;

do {
    $a += 2;
    echo $a.PHP_EOL;
} while ($a <= 98);

// this do while loop counts backwards by 5s from 100 to -10

$b = 105;

do {
    $b-=5;
    echo $b.PHP_EOL;
}while ($b >= -5);

// this do while loop multiplies the variable $a by itself until it reaches 1,000,000

$c = 2;

do {
    echo $c.PHP_EOL;
    $c *= $c;
} while ($c < 1000000);