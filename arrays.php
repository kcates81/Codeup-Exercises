<?php

// This is how you declare a numerically indexed array in PHP
$names = [
    [
        'first_name' => 'Kristen',
        'last_name' => 'Cates'
    ], ['first_name' =>'Natalie',
        'last_name' => 'Ortiz'
    ]
];

print_r($names[1]['first_name'].' '.$names[1]['last_name']).PHP_EOL;

// var_dump ($names).PHP_EOL;
// print_r($names).PHP_EOL;

// this is another way to declare a numerically indexed array 
$cohorts = array(
    'Arches',
    'Badlands',
    'Ike',
    'Joshua'
);

// associative array
$student = [
    'first_name' => 'Andrew',
    'last_name' => 'Powell-Morse'
];
$key = 'last_name';

// echo $student['first_name'].' '.$student['last_name'].PHP_EOL;

// echo "{$student['first_name']} {$student['last_name']}\n";

// var_dump($student).PHP_EOL;
// print_r($student).PHP_EOL;
// print_r($student['first_name']).PHP_EOL;


$student2 = [
    'Kristen',
    'LaDona',
    'Cates'
];

