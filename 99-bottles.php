<?php

for ($i = 99; $i >= 0 ; $i--) { 
   
    if ($i == 1) {
        echo "{$i} bottle of beer on the wall, {$i} bottle of beer\n";
        echo "Take it down, pass it around\n";
    } elseif ($i == 0) {
        echo "{$i} bottles of beer on the wall, {$i} bottles of beer\n";

        echo "Go to the store, buy some more\n";

        $i = 100;
    } else {
        echo "{$i} bottles of beer on the wall, {$i} bottles of beer\n";
        echo "Take one down, pass it around\n";

        usleep(1000000);
    }
}