<?php

$things = array('Sgt. Pepper', 
    "11", 
    null, 
    array(1,2,3), 
    3.14, 
    "12 + 7", 
    false, 
    (string) 11)
;

// foreach loop that echoes all of the items within the array including the contents of the nested array

foreach ($things as $item) {
    if (is_array($item)) {
       foreach ($item as $element) {
            echo "$element\n";
        } 
    } else {
        echo "$item\n";
    } 
}