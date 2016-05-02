<?php  
    require_once 'Log.php';

    $log = new Log ();
    $log -> fileName = 'log-{$logDate}.log';

    $log -> logMessage('ERROR', "This is an error message.");
    $log -> info("This is an info message.");
    $log -> error("This is an error message.");
?>