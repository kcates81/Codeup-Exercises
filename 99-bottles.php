<?php

for ($i= 99; $i >= 0 ; $i--) { 
    echo "{$i} bottles of beer on the wall, {$i} bottles of beer\n";
    echo "Take one down, pass it around\n";

    if ($i == 1) {
        echo "{$i} bottle of beer on the wall, {$i} bottle of beer\n";
        echo "Take it down, pass it around\n";
    }
}