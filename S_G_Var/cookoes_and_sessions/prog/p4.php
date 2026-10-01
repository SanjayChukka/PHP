<?php
    /*
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];
    */
    $n1 = $_COOKIE['number1'];
    $n2 = $_COOKIE['number2'];
    $n3 = $_POST['num3'];

    $sum = $n1 + $n2 + $n3;
    echo "The Sum is : ".$sum;
?>