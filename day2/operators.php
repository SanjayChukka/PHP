<?php
// Operators

// Arithmetic Operators
//addition (+) Multiplication (*), 
// Division (/), Modulus (%), Exponentiation (**)
$x = 20;
$y = 2;
$z = $x + $y;
echo $z."<br>"; // 30
// Subtraction (-)
echo $x-$y."<br>"; // -10
//  Multiplication (*)
echo $x*$y."<br>"; // 200
// Division (/)
echo $x/$y."<br>"; // 0.5
// Modulus (%)
echo $x%$y."<br>"; // 10
// Exponentiation (**)
echo $x**$y."<br>"; // 1000000000000000000

// Assignment Operators
$x = 50;

// Comparison Operators
$x = 10;
$y = 20;
$z = $x == $y;
echo $z."<br>"; // nothing (false) or 1 (true) depending on the comparison
echo "<br>".$x === $y; // 1 (true)
echo $x != $y."<br>"; // nothing (false)
echo $x !== $y."<br>"; // nothing (false)
echo $x > $y."<br>"; // nothing (false)
echo $x < $y."<br>"; // nothing (false)
echo $x >= $y."<br>"; // 1 (true)
echo $x <= $y."<br>"; // 1 (true)


// Logical Operators
$x = 10;
$y = 20;
$z = $x && $y;
echo $z."<br>"; // 0 (false)
$z = $x || $y;
echo $z."<br>"; // 1 (true)

// Increment/Decrement Operators
$x = 10;
$x++;
echo $x."<br>"; // 11
$x--;
echo $x."<br>"; // 10
++$x;
echo $x."<br>"; // 11
--$x;
echo $x."<br>"; // 10

// Spaceship operator 

$a = 10;
$b = 20;
echo $a<=>$b;
$a = 10;
$b = 10;
echo $a<=>$b;
$a = 20;
$b = 10;
echo $a<=>$b;
?>