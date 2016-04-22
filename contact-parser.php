<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $filename = 'contacts.txt';

    $handle = fopen('contacts.txt', 'r');

    $contents = fread($handle, filesize($filename));

    fclose($handle);

    $contacts = explode("\n", trim($contents));

    $newArray = array();
    foreach ($contacts as $key => $value) {

        $details = explode('|', $value); // correct

        $areaCode = substr($details[1], -10, 3);

        $exchange = substr($details[1], -7, 3);

        $sln = substr($details[1], -4, 4);

        $number = $areaCode.'-'.$exchange.'-'.$sln;

        $contacts = array('name' => $details[0], 'phone' => $number);

        array_push($newArray, $contacts);
        
    }

    return $newArray;

}

var_dump(parseContacts('contacts.txt'));
