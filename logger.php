<?php

function logMessage($logLevel, $message)
{
    $logDate = date('Y-m-d');
    $logTime = date('h:i:s');
    $fileName = "log-{$logDate}.log";
    $handle = fopen($fileName, 'a');

    $dateLog = [];

    $message = $logDate.' '.$logTime.' [ '.$logLevel.' ] '.$message;
   
    fwrite($handle, $message.PHP_EOL);    
    

    fclose($handle);

}

function logInfo($logMessage)
{
    logMessage("INFO",$logMessage);
}

function logError($logMessage)
{
    logMessage("ERROR", $logMessage);
}

logInfo("This is an info message.");

logError("This is an error message.");