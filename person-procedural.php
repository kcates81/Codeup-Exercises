<?php  
    require_once 'Person.php';

    echo 'The current population of PLanet Earth is ' . Person::$population.PHP_EOL;

    Person::birth();

    echo 'After a new birth, the population is ' . Person::$population.PHP_EOL;
?>