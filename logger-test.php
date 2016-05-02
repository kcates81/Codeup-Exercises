<?php  
    require_once 'Log.php';

    $log = new Log ('cli');
    
    $file = new File('file.txt');
    $file->append('Hello joshua!');
    $file->close();

    $log -> logMessage('ERROR', "This is an error message.");
    $log -> info("This is an info message.");
    $log -> error("This is an error message.");
?>