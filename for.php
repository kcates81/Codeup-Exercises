<?php

// Prompting the user to enter a starting and ending number
echo "Please enter a starting and an ending number\n";

if ($argc == 3 && ctype_digit($argv[1]) && ctype_digit($argv[2])) {
        $startingNum = $argv[1];
        $endingNum = $argv[2];

       $range = (range ((int)$startingNum, (int)$endingNum));

       var_dump($range);
    }

