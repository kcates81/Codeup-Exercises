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

// foreach loop that checks if an item is a scalar 
foreach ($things as $item) {
   if (is_integer($item)) {
       echo "{$item} is an integer\n";
    } elseif (is_float($item)) {
       echo "{$item} is a float\n";
    } elseif (is_bool($item)) {
       echo "{$item} is a boolean\n";
    } elseif (is_array($item)) {
        echo "This is an array: \n";
       foreach ($item as $element) {
              echo "$element\n";
          }   
    } elseif (is_null($item)) {
       echo "{$item} is null\n";
    } elseif (is_string($item)) {
        echo "{$item} is a string\n";
    } elseif (is_scalar($item)) {
        echo "{$item}is a scalar\n";
    }
}