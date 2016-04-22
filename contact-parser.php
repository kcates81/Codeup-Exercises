<?php

function parseContacts($filename)
{
    // this is my empty array of contacts
    $contacts = array();

    //this code pulls my content out of my text file and assigns it to the $contacts array
    $filename = 'contacts.txt';

    $handle = fopen('contacts.txt', 'r');

    $contents = fread($handle, filesize($filename));

    fclose($handle);

    // this code formats my array
    $contacts = explode("\n", trim($contents));

    // empty array I'll use later to push content from the $contacts array into once I've manipulated the data 
    $newArray = array();

    foreach ($contacts as $key => $value) {

        // this separates the name from the number as two different keys within my array
        $details = explode('|', $value);

        // this pulls out the area code from the string of numbers
        $areaCode = substr($details[1], -10, 3);

        // this pulls out the exchange number from the string of numbers
        $exchange = substr($details[1], -7, 3);

        // this pulls the SLN out of the string of numbers
        $sln = substr($details[1], -4, 4);

        // this concatenates the area code, exchange, and SLN, back together as one phone number with dashes between them
        $number = $areaCode.'-'.$exchange.'-'.$sln;

        // this populates my contacts array with name and number as my keys and assigns the proper values to each key
        $contacts = array('name' => $details[0], 'phone' => $number);

        // this pushes my newly formatted $contacts array into my $newArray
        array_push($newArray, $contacts);  
    }

    // this returns $newArray
    return $newArray;

}

// this runs my function in the REPL. I can now use this function on any file
var_dump(parseContacts('contacts.txt'));
