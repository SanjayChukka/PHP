<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <link rel="stylesheet" href="for_loops.css">
</head>
<body>

<p>Print 1 to 10</p>

        <?php
            //for loop

            /*for loop is executed a block of code repeatedly, especially when we know how many
            times we want to repet it.
            SIMPLE DEFINATION:-
            A for loop repeats a block of code while a given condition is true.*/

            // for loop
            // Print 1 to 100
            for ($i = 1; $i <= 10; $i++) {
                echo $i . ' ';
            }
        ?>
        <p>Print 10 to 1</p>
        <!-- // Print 10 to 1 -->
        <?php
            for ($i = 10; $i >= 1; $i--) {
                echo $i . ' ';
            }
        ?>
        <p>Print Even Numbers</p>
        <!-- // Print Even Numbers -->
        <?php
            for ($i = 1; $i <= 10; $i++) {
                if ($i % 2 == 0) {
                    echo $i . ' ';
                }
            }
        ?>
        <p>Print Odd Numbers</p>
        <!-- // Print Odd Numbers -->
        <?php
            for ($i = 1; $i <= 10; $i++) {
                if ($i % 2 == 1) {
                    echo $i . ' ';
                }
            }
        ?>
        <p>Direct loop increment</p>
        <?php
            for ($i = 1; $i <= 10; $i += 2) {
                echo $i . ' ';
            }
        ?>
        <p>Tables</p>
        <?php
            $a = 5;
            for ($i = 1; $i <= 10; $i++) {
                echo $i * $a . ' ';
            }
        ?>
        <!-- 2 to 20 Tables -->
         <h2>2 to 20 Tables</h2>
         <div class="blocks">
            <table>
            <?php
                for ($i = 2; $i <= 20; $i++) {
                    echo "<div class='table'>";
                    for ($j = 1; $j <= 10; $j++) {
                        echo $i . " x " . $j . " = " . $i * $j . "<br>";
                    }
                    echo "</div>";
                }
            ?>
            </table>
        </div>

        <p>Prime Numbers: </p>
        <?php
            // $num = 10;

            // if ($num <= 1) {
            //     $isPrime = false;
            // }
            // else {
            $arr = [];
            for ($j = 1; $j <= 100; $j++) {
                // $isPrime = true;
                for ($i = 1; $i < $j; $i++) {
                    if ($i == 1 && $j==1) {
                        continue;
                    }
                    if ($j % $i == 0) {
                        // $isPrime = false;
                        break;
                    }
                }
                if ($j == $i) {
                    echo $j . " ";
                }
            }
            echo "<hr>";
            // 1 to 5 normal , 5 to 15 odd and 15 to 20 normal numbers

            for ($i = 1; $i <= 20; $i++) {

                echo $i . " ";
                if ($i >= 5 && $i < 15) {
                    $i++;
                }
            }

            echo "<hr>";

            for ($i = 1; $i <= 20; $i++) {

                echo $i . " ";
                if ($i >= 7 && $i < 15) {
                    $i++;
                }
            }

            // }
        ?>

</body>
</html>