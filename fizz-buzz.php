<?php 

for ($i = 1; $i <= 100 ; $i++) { 
    // checks if the number is a multiple of both 3 AND 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "Fizzbuzz\n";
    // checks if the number is a multiple of 5
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    // checks if the number if a multiple of 3
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    // default case
    } else {
        echo "{$i}\n";
    }
}