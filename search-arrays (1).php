<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function findArray($a, $name)
{
    $result = array_search($name, $a);

    if ($result !== FALSE) {
        return TRUE.PHP_EOL;
    } else {
        return FALSE.PHP_EOL;
    }
}

echo findArray($names, 'Tina');
echo findArray($names, 'Bob');

function arrayMatch ()
{

}
