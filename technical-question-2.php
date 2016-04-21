<?php


if ($argc == 3 && is_string($argv[1]) && ctype_digit($argv[2])) 
{
    $min = 1;
    $max = $argv[2];
    $randomNum = mt_rand((int)$min, (int)$max);

    if ($argv[1] === 'even' || 'EVEN' || 'e') {
        do {
            echo $randomNum.PHP_EOL;

        } while ($randomNum % 2 == 0)

    } elseif ($argv[1] === 'odd' || 'ODD' || 'o') {
        do {
            echo $randomNum.PHP_EOL;

        } while ($randomNum % == 1 );
    }else {
        echo "Try again";
    }
}


