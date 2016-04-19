<?php

for ($i = 99; $i >= 0 ; $i--) { 
    echo "{$i} bottles of beer on the wall, {$i} bottles of beer\n";
    echo "Take one down, pass it around\n";

    usleep(1000000);

    if ($i == 1) {
        echo "{$i} bottle of beer on the wall, {$i} bottle of beer\n";
        echo "Take it down, pass it around\n";
    }

    if ($i == 0) {
        echo "{$i} bottles of beer on the wall, {$i} bottles of beer\n";

        echo "Go to the store, buy some more\n";

        $i = 100;
    }

}