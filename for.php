<?php

// This is the initial prompt. The user has to run the file in the 
// terminal w/o arguments to get this to work
if ($argc == 1) {
    echo "Please enter a starting and ending number\n";
    exit;
}

// This prompts the user to input an increment for the number output
fwrite(STDOUT, "What is the increment?\n");
$increment = fgets(STDIN);

// This sets the min and max for the number range. The user has to 
// load the file and pass 2 numbers as arguments for this to work
for ($min = $argv[1]; $min <= $argv[2] ; $min += $increment) { 
   echo "number = {$min}\n";
}

