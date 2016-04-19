<?php

// example of break
for ($i = 1; $i <= 100; $i++) {
    echo $i . "\n";
    if ($i == 5) {
        break;
    }
}

// example of continue 
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
    if ($i % 2 == 0) {
        continue;
    }
    echo "^ that is an odd number.\n";
}