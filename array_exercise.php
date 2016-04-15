<?php  

// Basic syntax
$numbers = array(
    1,
    2,
    3,
    4,
    5
);

var_dump($numbers).PHP_EOL;
print_r($numbers).PHP_EOL;

// New syntax
$numbers2 = [
    1,
    2,
    3,
    4,
    5
];

var_dump($numbers2).PHP_EOL;
print_r($numbers2).PHP_EOL;

echo $numbers2[3].PHP_EOL;

$contactInfo = [
    'first_name' => 'Tinky',
    'last_name' => 'Winky',
    'email' => 'twinky@teletubbies.org',
    'phone' => '210-867-5309'
];

$test = [
    'person1' => $contactInfo,
    'person2'=> [
        'first_name' => 'Barney',
        'last_name' => 'Dinosaur',
        'email' => 'barney.n.friends@hotmail.com',
        'phone' => '202-555-0123'
    ],
    'person3' => [
        'first_name' => 'Lamb',
        'last_name' => 'Chop',
        'email' => 'lchop@lchopsplayalong.net',
        'phone' => '212-857-1051'
    ]
];

echo $test['person1']['email'] . PHP_EOL;
print_r($test).PHP_EOL;