<?php

// TODO: Create your inspect() function here

function inspect($a)
{
    if (is_null($a)) {
        echo "The variable is NULL\n";
    }elseif (is_array($a) && empty($a)) {
        echo "The variable is an empty array\n";
    }elseif (is_array($a)) {
        echo "The variable is an array\n";
    }elseif (is_bool($a)) {
        echo "{$a} is a boolean\n";
    }elseif (is_numeric($a)) {
        echo "{$a} is a number\n";
    }elseif (empty($a)) {
        echo "The variable is an empty string\n";
    }else {
        var_dump($a);
    }
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($a= $num1);

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($a = $num2);

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($a = $num3);

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($a = $num4);

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($a = $null);

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($a = $bool1);

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($a = $bool2);

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($a = $string1);

echo 'Inspecting $string2' . PHP_EOL;
echo inspect($a = $string2);

echo 'Inspecting $array1' . PHP_EOL;
echo inspect($a = $array1);

echo 'Inspecting $array2' . PHP_EOL;
echo inspect($a = $array2);
