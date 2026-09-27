<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements 1</title>
</head>
<body>
    <?php
// Age Checker 
$age = 20;
if($age >= 18){
    echo "Eli\rgib\n";
}
else{
    echo "Not Eligible to vote";
}

// Positive/ Negative Number
$num = -1;
if($num>0){
    print("Positive\n");
} 
else if($num<0){
    print "Negative\n";
}
else{
    print("Zero\n");
}

// Even?Odd
$num = 24;
if($num%2==0){
    echo "Even\n";
}
else{
    echo "Odd\n";
}

// Pass / Fail
$marks = 45;
if($marks>=40){
    echo "Pass\n";
}
else{
    echo "Fail\n";
}

// Temp Checker
$temp = 45;
if($temp>35){
    echo "Hot\n";
}
elseif($temp<=35 && $temp>=20){
    echo "Normal\n";
}
elseif($temp<20){
    echo "Cold\n";
}
?>
</body>
</html>