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

/* Q11
$text = "Programming";
$count = 0;
for($i = 0; $i <= strlen($text)-1; $i++){
    if
    (
        $text[$i]=='a'||
        $text[$i]=='e'||
        $text[$i]=='i'||
        $text[$i]=='o'||
        $text[$i]=='u')
    {
        $count++;
    }
}

echo "Count of Vowels is : ".$count;
*/

/* Q12
$numbers = [10, 20, 10, 30, 20, 40, 30];
$new=[];

foreach($numbers as $num){
    if(in_array($num,$new)){
        continue;
    }
    else{
        array_push($new,$num);
    }
}
echo "<pre>";
print_r($new);
*/


?>