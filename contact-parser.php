<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $filename = 'contacts.txt';

    $handle = fopen('contacts.txt', 'r');

    $contents = fread($handle, filesize($filename));

    fclose($handle);

    $contacts = explode("\n", $contents);

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
