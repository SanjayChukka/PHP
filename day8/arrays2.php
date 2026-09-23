<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays with foreach</title>
</head>
<body>
<?php
    // What does it do
    $numbers = [10, 20, 30, 40, 50];
    foreach ($numbers as $num) {
    echo $num . "<br>";
    }
    echo "<hr>";

    // =======================================================

    // Indexed Arrays
    $names = ["Sanjay", "John", "David"];
    foreach ($names as $index => $name) {
    echo "$index : $name <br>";
    }
    echo "<hr>";

    // =======================================================

    // Associative Arrays
    $student = [
    "name"   => "Sanjay",
    "age"    => 23,
    "course" => "B.Tech",
    ];
    // echo "<hr>";
    foreach ($student as $key => $val) {
    echo "$key : $val<br>";
    }
    // val contains the last val not the first or any other
    echo "$val<br>";
    echo "<hr>";

    // =======================================================

    // Modifying Values
    $marks = [50, 60, 70];

    foreach ($marks as $mark) {
    $mark = $mark + 10;
    }
    print_r($marks); //Array ( [0] => 50 [1] => 60 [2] => 70 )
    // echo "<br>";
    echo "<hr>";

    // =======================================================

    // Providing Reference
    foreach ($marks as &$mark) {
    $mark = $mark + 10;
    }
    print_r($marks);
    //Array ( [0] => 60 [1] => 70 [2] => 80 )
    // The Original Array Changes the Value
    echo "<hr>";

    // =======================================================

    // foreach vs for
    for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
    }
    foreach ($names as $name) {
    echo $name . "<br>";
    }
    echo "<hr>";

    // =======================================================

    // ex
    $student = [
    "name"   => "Sanjay Chukka",
    "age"    => 23,
    "course" => "Software Intern",
    ];
    foreach ($student as $key => $val) {
    echo "$key => $val<br>";
    }
    // foreach($student as $key => $val){
    //     print_r("$key : $val");
    //     echo "<br>";
    // }
    echo "<hr>";

    // =======================================================

    // Multi dimensional Array
    $students = [
    ["Sanjay", 23, "CSE"],
    ["John", 22, "ECE"],
    ["David", 24, "CSE"],
    ];
    print_r($students[1]);
    echo "<hr>";

    // =======================================================

    // Associative multidimensional arrays
    $students = [
    [
        "name"   => "Sanjay",
        "age"    => 23,
        "course" => "CSE",
    ],
    [
        "name"   => "John",
        "age"    => 22,
        "course" => "ECE",
    ],
    ];
    echo($students[1]["course"] . "<br>");
    print_r($students[0]["course"]);
    echo "<br>";
    echo "<hr>";

    // =======================================================

    // looping through the Associative Array
    foreach ($students as $key => $student) {
    print_r($student["name"] . "<br>");
    }
    echo "<hr>";

    // =======================================================

    // Nested Foreach
    foreach ($students as $student) {

    foreach ($student as $key => $value) {
        echo "$key : $value <br>";
    }

    echo "<hr>";
    }

    // =======================================================

    // Example
    $cart = [
    [
        "product"  => "Laptop",
        "price"    => 50000,
        "quantity" => 1,
    ],
    [
        "product"  => "Mouse",
        "price"    => 1000,
        "quantity" => 2,
    ],
    ];
    foreach ($cart as $item) {

    $total = $item["price"] * $item["quantity"];

    echo $item["product"] . " = " . $total . "<br>";
    }
    echo "<hr>";

    // =======================================================

    // Ex
    $students = [
    [
        "name"   => "Sanjay",
        "age"    => 23,
        "course" => "CSE",
    ],
    [
        "name"   => "John",
        "age"    => 22,
        "course" => "ECE",
    ],
    ];
    foreach ($students as $student) {
    echo $student["name"] . ' - ' . $student["age"] . ' - ' . $student["course"] . "<br>";
    }
    foreach ($students as $student) {
    if ($student["course"] == "CSE") {
        echo $student["name"];
    }
    }
?>
</body>
</html>