<?php  
    require_once 'Log.php';

    $log = new Log ();
    $log -> fileName = 'log-{$logDate}.log';

    logMessage();
    info("This is an info message.");
    error("This is an error message.");
?>