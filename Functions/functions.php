<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h1>Functions</h1>
    <h3>Creating a Function</h3>
    <pre>
    <code>
        function myMessage()
        {
            echo "Hello world!";
        }
    </code>
    </pre>
    <?php
    function myMessage()
    {
        echo "Hello world!";
    }
    ?>
    <h3>Calling a Function</h3>
    <?php
    function myMessage1()
    {
        echo "Hello world!";
    }
    myMessage1();
    ?>
    <h3>PHP Function Parameters</h3>
    <?php
    function familyName($fname)
    {
        echo "$fname Chukka.<br>";
        error_log("hello");
    }

    familyName("Sathwik");
    familyName("Jani");
    familyName("RamaDevi");
    familyName("Krishna");
    ?>
    <br>
    <?php

    function familyName2($fname, $year)
    {
        echo "$fname Refsnes. Born in $year.<br>";
    }

    // familyName2("Hege"); 
    // Fatal error: Uncaught ArgumentCountError:
    //  Too few arguments to function familyName2(), 1 passed 
    familyName2("Stale", "1978");
    familyName2("Kai Jim", "1983");
    ?>
    <br>
    <?php
    function setHeight($height = 50)
    {
        echo "The height is : $height <br>";
    }

    setHeight(350);
    setHeight();
    ?>
    <br>
    <?php
    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);
    ?>
    <br>
    <h3>Passing Argument by Reference </h3>
    <?php
    function add_five(&$value)
    {
        $value += 5;
    }
    $num = 2;
    add_five($num);
    echo $num;
    ?>
    <br>
    <h3>Variable Number of Parameters (variadic function)</h3>
    <?php
    // echo 2 / 0;  // Uncaught DivisionByZeroError: Division by zero
    function sumMyNumbers(...$x)
    {
        $n = 0;
        $len = count($x);
        for ($i = 0; $i < $len; $i++) {
            $n += $x[$i];
        }
        return $n;
    }

    $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
    echo $a . "<br>";
    ?>
    <br>

    <?php
    function myFamily($lastname, ...$firstname)
    // function myFamily(...$firstname,$lastname) 
    // Fatal error: Only the last parameter can be variadic 
    {
        $txt = "";
        $len = count($firstname);
        for ($i = 0; $i < $len; $i++) {
            $txt = $txt . "Hi, $firstname[$i] $lastname.<br>";
        }
        return $txt;
    }

    $a = myFamily("Doe", "Jane", "John", "Joey");
    echo $a;
    ?>
    <!-- <h3>Strict Requirement</h3> -->
    <?php

    /*declare(strict_types=1); // strict requirement

    function addNumbers(int $a, int $b)
    {
        return $a + $b;
    }
    echo addNumbers(5, "5 days");
    // since "5 days" is not an integer, an error will be thrown
    */
    ?>
    <h3>PHP Return Type Declarations</h3>
    <?php

    // declare(strict_types=1); // strict requirement

    function addNumbers(float $a, float $b): string
    {
        return ($a + $b);
    }
    echo addNumbers(1.2, 5.2);

    ?>
    <br>
    <h3>Function Scope</h3>
    <?php
    $x = 20;

    function one()
    {
        $x = 10;
        echo $x;
    }
    function two()
    {
        global $x;
        echo $x;
    }

    one();
    echo "<br>";
    two();
    ?>
    <br>
    <h3>Static Variables in Functions</h3>
    <?php
    function test()
    {
        static $x = 10;
        $x--;

        echo $x . " ";
    }

    test();
    test();
    test();
    test();
    ?>
    <br>
    <h3>Anonymous Functions</h3>
    <?php
    $greet = function () {
        echo "Hello";
    };

    $greet(); // The function itself has no name, and we store it in $greet.

    ?>
    <br>
    <h3>Anonymous Functions with Parameters</h3>
    <?Php
    $multiply = function ($a, $b) {
        return $a * $b;
    };

    $result = $multiply(5, 4);

    echo $result;
    ?>
    <br>
    <h3>Closure</h3>
    <?php
    $x = 10;
    $test = function () use ($x) {
        $x += 5;
        return $x;
    };
    // echo "$test()";
    //  Uncaught Error: Object of class Closure could not be converted to string 
    echo $test();
    echo "<br>";
    echo $x;
    ?>
    <br>
    <h4>other example</h4>
    <?php
    $x = 10;
    $test = function () use (&$x) {
        $x += 5;
        echo $x . " ";
    };
    $test(); // 15
    $test(); // 20
    echo $x; // 20
    ?>
    <br>
    <h3>Callback</h3>
    <?php
    function greet($name)
    {
        return "Hello " . $name;
    }

    function process($callback, $nae)
    {
        echo $callback($nae);
    }

    process("greet", "Sanjay");
    ?>    
</body>

</html>