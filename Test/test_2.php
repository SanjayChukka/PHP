<?php
/* Q5
    $numbers = [10, 15, 20, 25, 30];
    $EvenSum = 0;
    $OddSum = 0;
    $total = 0;
    foreach($numbers as $num){
        if($num%2==0){
            echo "Even Numbers : ".$num." "."<br>";
            $EvenSum += $num;
        }
        elseif(!$num%2==0){
            echo "Odd Numbers : ".$num." "."<br>";
            $OddSum += $num; 
        }
        else{
            echo "Not a Valid Number";
        }
    }
    echo "Even Sum : ".$EvenSum."<br>";
    echo "Odd Sum : ".$OddSum."<br>";
    echo "Total : ".$total = $EvenSum + $OddSum;
*/

/* Q6
    $text = "PHP Programming";
    $upper = strtoupper($text);
    echo $upper."<br>";
    $first = strlen(substr($text,0,3));
    echo $first."<br>";
    $second = strlen(substr($text,4));
    echo $second."<br>";
    echo $ex_length = $first + $second."<br>";
    echo $replace = str_replace("PHP","WEB",$text);
*/

/* Q7
    $age = 25;
    $experience = 3;
    $isActive = true;

    if($age >= 21 && $experience >= 2 || $age >= 30 && $isActive = true){
        echo "Eligible";
    }
    else{
        echo "Not Eligible";
    }
*/

/* Q8
    $numbers = [1,2,3,4,5];
    foreach($numbers as $num){
        if($num == 3){
            continue;
        }
        echo $num." ";
    } 
*/
