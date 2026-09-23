<?php
// $x;
// echo $x."<br>"; // Undefined variable $x

// $x = 10;
// echo isset($x)." ".$x."<br>"; // true 1 10
// // isset is used to check whether a variable is set or not.
// // It returns true(1) if the variable exists and is not NULL,
// //  otherwise it returns false(nothing).

// // unset() function is used to destroy a variable.
// unset($x);
// echo isset($x)." ".$x."<br>"; // false  Undefined variable $x 
// $x = 20;
// echo isset($x)." ".$x."<br>"; // true 1 20

// // empty() function is used to check whether a variable is empty or not.
// // It returns true(1) if the variable is empty,
// // otherwise it returns false(nothing).

// $y;
// echo empty($y)." ".$y."<br>"; // false 20

// // datatype
// $a = 10; // integer
// $b = 10.5; // float
// $c = "Sanjay"; // string
// $d = true; // boolean
// $e = null; // null
// $ar = []; // empty array
// $f = array(1, 2, 3); // array
// $g = new stdClass(); // object

// echo var_dump($a)." ".$a."<br>"; // int(10) 10
// echo var_dump($b)." ".$b."<br>"; // float(10.5) 10.5
// echo var_dump($c)." ".$c."<br>"; // string(5) "Sanjay"
// echo var_dump($d)." ".$d."<br>"; // bool(true) 1
// echo var_dump($e)." ".$e."<br>"; // NULL
// echo var_dump($ar)." ".$ar."<br>"; // array(0) { }
// echo var_dump($f)." ".$f."<br>"; // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
// echo var_dump($g)." ".$g."<br>"; // object(stdClass)#1 (0) { }

// //methods to check the datatype of a variable are
// // is_int(),
// // is_float(),
// // is_string(),
// // is_bool(), 
// // is_null(), 
// // is_array(), 
// // is_object()


// Type casting is used to convert a variable from one data type to another data type.
$id_name = 1000; // integer
// $x = (string)$id_name; // string
// echo $x."<br>"; // string(4) "1000"
echo (string)$id_name;
echo var_dump($id_name);
echo is_int($id_name);
// $y = "Sanjay";
// $y = (int)$y; // integer
// echo $y."<br>"; // int(1) 1
?>