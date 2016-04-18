<?php

// example of a foreach with keys
$names = [
    "lvillanueva"   => "Lorena",
    "mel"           => "Melissa",
    "niknik"        => "Nikki",
    "eddy"          => "Edric",
    "markymark"     => "Marcus",
    "pancho"        => "Pancho"
];

foreach ($names as $userName => $studentName) {
   echo "Hey everybody, say hello to $studentName's username is $userName\n";
}