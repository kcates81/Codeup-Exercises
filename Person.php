<?php  
    class Person
    {
        public $firstName;
        public $lastName;

        public static $population = 7241000000;

        public static function birth ()
        {
            self::$population = self::$population += 1;
        }
    }
?>