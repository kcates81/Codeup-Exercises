<?php  
require_once 'rectangle.php';
require_once 'square.php';

// This is the first instance that I tested in the terminal
$newShape = new Rectangle(4,5);

echo "The rectangle's area is: " . $newShape->area().PHP_EOL;

// This is the instance of the Square class that I tested in the terminal
$square = new Square(6,7);

echo "The square's perimeter is: " . $square->perimeter(6).PHP_EOL;

// This tests to make sure that the methods and properties of Rectangle were passed to the child class Square
echo "The square's area is: " . $square->area().PHP_EOL;
?>