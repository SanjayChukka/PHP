<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patterns</title>
</head>
<body>
    <p>1. Square</p>
    <?php
        // pattern 1
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    ?>

    <p>Triangle Patterns </p>
    <?php
        // pattern 2
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    ?>
    <p>3. Right angle Triangle 2</p>
    <?php
        // pattern 3
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "$i ";
            }
            echo "<br>";
        }
    ?>
    <?php
        // pattern 3
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "$i ";
            }
            echo "<br>";
        }
    ?>
    <?php
        // pattern 4
        for ($i = 1; $i <= 10; $i += 2) {
            for ($j = 1; $j <= $i; $j++) {
                if ($j % 2 == 1) {
                    echo "$j ";
                }
            }
            echo "<br>";
        }
        for ($i = 1; $i <= 5  ; $i ++) {
            for ($j = 1,$k = 1; $j <= $i; $j++,$k=$k+2) {
                    echo "$k ";
            }
            echo "<br>";
        }
    ?>
    <br>
    <?php
        $fib = 1;
        for($i = 1;$i <= 5;$i++){
            $fib *= $i;
        }
        echo "$i ";
    ?>
    <?php

    ?>
</body>
</html><?php
