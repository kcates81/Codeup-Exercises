<?php  
    // This assigns the report.txt file to a variable
    $filename = 'report.txt';

    // This opens the file in read mode     
    $handle = fopen($filename, 'r');
    
    // This reads the file and puts it into a string of content
    $contents = file_get_contents($filename, NULL, NULL, 521, 278);

    var_dump($contents);     
    
    // This takes my contents string and turns it into an array
    $contentsArray = explode("/n", $contents);

    // This closes my file 
    fclose($handle);

    print_r($contentsArray);
?>