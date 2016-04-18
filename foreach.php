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

// for ($i=0; $i < (count($things)); $i++) { 

//     $items = $things[$i];
//     if (is_scalar($items)) {
//         echo "{$items} is a scalar\n";
//     }  
// }

foreach ($things as $item) {
    if (is_scalar($item)) {
        echo "{$item} is a scalar\n";
    }
}