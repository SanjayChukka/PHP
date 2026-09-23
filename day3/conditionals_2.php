<?php
// logical and and or operators with if  
if(10<5||true&&"Hello"){
    echo "Weclome<br>";
}

// if-else 

$login = true;
$name = "Sanjay";

if($login){
    echo "Welcome $name <br>";
}
else{
    "Please Login";
}  


$name = "Sanjay";
echo substr($name,2,3);
 
echo "<br>";
$favcolor = "red";

$text = match($favcolor) {
  "red" => "Your favorite color is red!",
  "blue" => "Your favorite color is blue!",
  "green" => "Your favorite color is green!",
  default => "Your favorite color is neither red, blue, nor green!",
};

echo $text;

echo "<br>";
$d = 3;

$text = match($d) {
  1, 2, 3, 4, 5 => "The week feels so long!",
  6, 0 => "Weekends are best!",
  default => "Invalid day",
};

echo $text;
?> 