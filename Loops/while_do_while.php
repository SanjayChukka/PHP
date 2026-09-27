<?php
//while loop

/*A while loop executes a block of code as long as the given condition is true.

SIMPLE WORDS:-
First PHP checks the condition. If the condition is true, 
it execuits the code. Then it checks the condition again.*/

//example -1

for($i =1; $i <= 5; $i++)
    {
        echo "number: $i <br>";
    }
     echo "<br>";

//example-2

$a = 1; //print numbers form 1-5
while($a <= 5)
    {
        echo $a . "<br>";
        $a++; 
    }
     echo "<br>";

//example-3

$m = 1; // print odd numbers
while($m <= 20)
    {
        echo "$m <br> ";
        $m = $m + 2 ;
        
    }
    echo "<br>";

//example-4

$b = 5; // print the numbers from  5 to -1
while($b >= -1)
    {
        echo $b . "<br>";
        --$b;
    }
     echo "<br>";

//example-5

$t = 1;
while($t <= 10)
    {
        echo "5 * $t = " . (5 * $t) . "<br>";
        $t++;
    }
    echo "<br>";

//exampl-6
$t = 1;
while($t <= 10)
    {
        echo "9 * $t = " . (9 * $t) . "<br>";
        $t++;
    }
echo "<br>";

//example-7

$a = 1;
while($a <= 10)
    {
        if($a % 3 == 0)
            {
                echo "$a is even <br>";
            }
            else{
                echo "$a is odd <br>";
            }
            $a++;
    }
    echo "<br>";

//example-8 tables from 2-10

$table = 2;

while ($table <= 10) {

    echo "<h3>Multiplication Table of $table</h3>";

    $i = 1;

    while ($i <= 10) {
        echo "$table x $i = " . ($table * $i) . "<br>";
        $i++;
    }

    echo "<br>";

    $table++;
}
echo "<br>";

//example-9

$x = 12;
if($x <= 10)
    {
        echo "condition is true <br>";
    }
    else{
        echo "condition is false <br>";
    }
    echo "<br>";



//example tables from 11 - 20
$tables = 11;
while($tables <= 20)
    {
        echo "<h2> multiplications tables of $tables </h2>";
        $i = 1;
        while($i <= 10)
            {
                echo "$tables x  $i =". ($tables * $i ) . "<br>";
                $i++;
            }
            echo "<br>";
            $tables++;
    }
//===================================================================================================

//do-while

/*A do-while loop is used to execute a block of code repeatedly as long as a 
condition is true.
THE CODE EXECUTES AT LEAST ONCE, AND THEN THE CONDITION IS CHECKED.

ORDER:- Check condition--> execuit --> check condition -->...*/

//example-1
$a = 10;
do{
    echo "hello";
}while($a < 5);
echo "<br>";
echo "<br>";

//example-2
$a = 2;
do{
    echo "$a <br>";
    $a = $a + 2; 
} while($a <= 10);
echo "<br>";


//exmaple-3

$num = 5;
$i = 1;
do {
    echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
    ++$i;
} while ($i <= 10);
echo "<br>";

//example-6

$choice = 1;
do {

    echo "1. View Profile<br>";
    echo "2. Settings<br>";
    echo "3. Exit<br>";

    $choice = 3;

} while ($choice != 3);

echo "Program ended";
echo "<br>";

echo"<br>";

//=============================================================================================================
//for loop

/*for loop is executed a block of code repeatedly, especially when we know how many
times we want to repet it.
SIMPLE DEFINATION:-
A for loop repeats a block of code while a given condition is true.*/

//example-1

for ($i = 1; $i <= 5; $i++)
    {
        echo "$i <br>";
    }echo "<br>";
    
//example-2

for($a = 2; $a <= 10; $a += 2)
{
    echo "$a <br>";
}echo "<br>";


//example-3

$num = 7;
for($i=1; $i <= 10; $i++)
    {
        echo "$num x  $i = " . ($num * $i) . "<br>";
    }echo "<br>";

//example-4

$x = 1;
for($x = 1; $x <= 5; $x++)
    {
        echo "hello mohan <br>";
    }
    echo "<br>";

//print 1-5

$i = 1;
for($i = 1; $i <= 10; $i++)
    {
        echo $i . "<br>";
    }
    echo "<br>";

// even numbers

$a = 2;
for($a = 2; $a <= 10; $a +=2)
    {
        echo $a . "<br>";
    }
    echo "<br>";

?>