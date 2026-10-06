<?php
/* Q14
    // First case
    // $isActive = true;
    // $isAdmin = true;
    // $hasPermission = true;
    // $isBlocked = false;

    // Second case
    // $isActive = true;
    // $isAdmin = false;
    // $hasPermission = true;
    // $isBlocked = false;

    // Third case
    $isActive = true;
    $isAdmin = false;
    $hasPermission = false;
    $isBlocked = false;

    if($isActive == 1 && $isBlocked == 0 && $isAdmin == 1 || $hasPermission == 1){
        echo "Access Granted";
    }
    else{
        echo "Access Denied";
    }
*/

/*
    $numbers = [10, 50, 30, 90, 70, 90, 40];
    $largest = $numbers[0];
    $second = $numbers[0];


    for($i = 0 ; $i < count($numbers)-1; $i++){
        if($numbers[$i]>$largest){
            $largest = $numbers[$i];
        }
        elseif($numbers[$i] > $second && $numbers[$i] < $largest){
            $second = $numbers[$i];
        }
    }
    echo $largest."<br>";
    echo $second;
*/
?>