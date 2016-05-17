<?php  
    class Person
    {
        public $firstName;
        public $lastName;

        public function __construct($firstName, $lastName)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }
    }

    class Triangle
    {
        public $sideOne;
        public $sideTwo;
        public $sideThree;

        public function __construct($sideOne, $sideTwo, $sideThree);
        {
            $this->sideOne = $sideOne;
            $this->sideTwo = $sideTwo;
            $this->sideThree = $sideThree;
        }

        public function __destruct()
        {
            echo "Done!".PHP_EOL;
        }

        public function perimeter(){
            return $this->sideOne + $this->sideTwo + $this->sideThree;
        }
    }

    $triangle = new Triangle(2, 3, 4);
    echo $triangle->perimeter().PHP_EOL;

    $kristen = new Person('Kristen', 'Cates');

    echo $kristen->firstName.PHP_EOL;

    // $ashley = new Person();
    // $ted = new Person();

?>