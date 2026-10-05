<?php
/* Q9
    $str = "HELLO";
    $last = strlen($str)-1;

    for($i = 0; $i <= $last/2; $i++){
        $temp = $str[$last];
        $str[$last] = $str[$i];
        $str[$i] = $temp;
        $last--;
    }
    echo $str;
*/

/* Q10
$numbers = [25, 10, 75, 40, 90, 15];
$largest = $numbers[0];

foreach($numbers as $number){
    if($number > $largest){
        $largest = $number;
    }
}
echo $largest;
*/

/*
$numbers = [25, 10, 75, 40, 90, 15];

$largest = $numbers[0];

foreach ($numbers as $number) {

    if ($number > $largest) {
        $largest = $number;
    }

}

echo "Largest Number: " . $largest;
*/
?>