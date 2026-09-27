<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling in PHP</title>
</head>
<body>
<!-- Errors in PHP -->
<!-- Error -->

<?php
/* 
    echo $name;
    echo "Hello";
    */
?> 

<!-- E_ERROR -->

<?php
/*
function test() {
    echo "Hello";
}

test2(); // Uncaught Error: Call to undefined function test2() 

echo "Program finished";
*/
?>

<!-- E_WRNING -->
 <?php
/*
$file = fopen("abc.txt", "r"); // fopen(abc.txt): Failed to open stream: 

echo "Program continues";
*/
?>

<!-- E_PARSE -->
 <?php

// echo "Hello"       // Parse error: syntax error, unexpected token "echo", expecting "," or ";"
// echo "World";
?>

<!-- E_NOTICE -->
 <?php
// Example of deprecated PHP feature
// $number = 10;
// $number{0} = 5;
// Fatal error: Array and string offset access syntax with curly braces is no longer supported

// echo $number;
?>
</body>
</html>