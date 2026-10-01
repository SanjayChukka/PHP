<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions 2</title>
</head>

<body>
    <h3>array_map()</h3>
    <?php
        $nums   = [1, 2, 3];
        $result = array_map(function ($x) {
            return $x * 2;
        }, $nums);
        print_r($result);
    ?>

    <h3>array_filter()</h3>
    <?php
        $nums   = [1, 2, 3, 4, 5];
        $result = array_filter($nums, function ($x) {
            return $x > 3;
        });
        print_r($result);
    ?>

    <h3>array_reduce()</h3>
    <?php
        $nums   = [1, 2, 3, 4];
        $result = array_reduce($nums, function ($total, $x) {
            return $total + $x;
        }, 0);
        echo $result;
    ?>

    <h3>Arrow Functions</h3>
    <?php
        $double = fn($x) => $x * 2;
        echo $double(5);
    ?>

    <h3>Recursion</h3>
    <?php
        function countDown($n)
        {
            if ($n <= 0) {
                return;
            }
            echo $n . " ";
            countDown($n - 1);
        }
        countDown(5);
    ?>

    <h3>Variadic Functions ...</h3>
    <?php
        function add(...$numbers)
        {
            return array_sum($numbers);
        }
        echo add(10, 20, 30, 40);
    ?>

    <h3>Named Arguments</h3>
    <?php
        // The order doesn't matter when using names.
        function student($name, $age)
        {
            echo "$name is $age years old";
        }
        student(age: 23, name: "Sanjay");
        // @param and parameter using in function should be same
    ?>

    <h3>Nullable Types</h3>
    <?php
        function greet(?string $name)
        {
            echo $name . "<br>";
            var_dump($name); // string(2) "51"
        }
        // greet(null);
        greet(51);
        echo "<br>";

        /*
    function greet1(?int $name)
    // Uncaught TypeError: greet1(): 
    // Argument #1 ($name) must be of type ?int, string given,
    {
        echo $name . "<br>";
        var_dump($name);   // string(2) "51"
    }
    // greet(null);
    greet1("Sanjay");
    // var_dump($name); // Error Undefined Variable
    */
    ?>

    <h3>Union Types</h3>
    <?php
        function display(int | string $value)
        {
            echo $value . "<br>";
            var_dump($value);
        }
        display("Sanjay");
        echo "<br>";
        display("Hello");
    ?>
    <br>
    <?php
        function counts($x)
        {
            if ($x > 1) {
                return;
            }
            echo $x . " ";
            counts($x - 1);
        }
        counts(10);
    ?>

    <h3>Void return Type</h3>
    <?php
        function test(): void
        {
            echo "Hello";
            //Fatal error: A void function must not return a value
            // return 10;
        }
        test();
    ?>
    <br>
    <h3>Mixed return Type</h3>
    <?php
        function test2(mixed $value)
        {
            var_dump(($value));
            return $value;
        }
        echo test2("Sanjay");
        echo "<br>";
        echo test2(1312);
        echo "<br>";
        echo test2(13.12);
        echo "<br>";
        echo test2(true);
        echo "<br>";
        echo test2(false);
    ?>
    <br>
    <h3>First-Class Callables</h3>
    <?php
        function square($x)
        {
            return $x * $x;
        }
        $operation = square(...);
        echo $operation(5);

        //Fatal error: Uncaught Error: Call to undefined function operation() 
        // echo operation(5);

    ?>
</body>

</html>