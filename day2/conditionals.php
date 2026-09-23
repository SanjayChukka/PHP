<?php
// Block of code to demonstrate the use of conditionals in PHP
{
    echo "Conditionals in PHP<br>";
    echo "--------------------<br>";
}

// Get nothing (False or 0)
//when we the evaluation of the condition is false,
//then the code inside the else block will not be executed.
if (false) {
    echo "This is False<br>";
}
if (0) {
    echo "This is False<br>";
}
if (null) {
    echo "This is False<br>";
}
if (10 + 20 - 30) {
    echo "This is False<br>";
}
//if the evaluation of the condition is true,
// then the code inside the if block will be executed.
if (true) {
    echo "This is True<br>";
}
if (1) {
    echo "This is True<br>";
}
if ("Sanjay") {
    echo "This is True<br>";
}
if (10 + 20 + 30) {
    echo "This is True<br>";
}

$x = 10;
$y = 10;
if ($x == $y) {
    echo "Both values are Equal<br>"; // true
}
$x = 20;
if ($x == $y) {
    echo "Not Equal";
}
$x = "10";
if ($x == $y) {
    echo "Both are Equal<br>"; // true
}
if($x===$y){
    echo "This is False Statement";
}
echo "Page End<br>";

?>
