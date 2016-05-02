<?php 
    class Log
    {
        public $fileName;
        public function logMessage ($logLevel, $message) 
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
        public function info ($logMessage)
        {
            logMessage("INFO",$logMessage);
        }
        public function error ($logMessage)
        {
            logMessage("ERROR", $logMessage);
        }
    }
?>