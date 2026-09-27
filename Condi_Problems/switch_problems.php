<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 20;

        switch ("/") {
            case "+":
                echo $a + $b;
                break;
            case "-":
                echo $a - $b;
                break;
            case "*":
                echo $a * $b;
                break;
            case "/":
                echo $a / $b;
                break;
            case "%":
                echo $a % $b;
                break;
            default:
                echo "Something went Wrong";

        }
        echo "<br>";
        //Finding a Day
        $day = 7;

        switch ($day) {
            case 1:
                echo "Monday";
                break;
            case 2:
                echo "Teusday";
                break;
            case 3:
                echo "Wednesday";
                break;
            case 4:
                echo "Thursday";
                break;
            case 5:
                echo "Friday";
                break;
            case 6:
                echo "Saturday";
                break;
            case 7:
                echo "Sunday";
                break;
            default:
                echo "Invalid Number";
        }

        echo "<br>";

        // Atm Menu System
        $user_choice = 2;

        switch($user_choice){
            case 1:
                echo "Check balance";
                break;
            case 2:
                echo "Deposit";
                break;
            case 3:
                echo "Withdraw";
                break;
            case 4:
                echo "Exit";
                break;
            default:
            echo "Invalid Input";
        }
        echo "<br>";
        $user_input = 2;

        switch($user_input){
            case 1:
                echo "January";
                break;
            case 2:
                echo "February";
                break;
            case 3:
                echo "March";
                break;
            case 4:
                echo "April";
                break;
            case 5:
                echo "May";
                break;
            case 6:
                echo "June";
                break;
            case 7:
                echo "July";
                break;
            case 8:
                echo "August";
                break;
            case 9:
                echo "September";
                break;
            case 10:
                echo "October";
                break;
            case 11:
                echo "November";
                break;
            case 12:
                echo "December";
                break;
            default:
                echo "No Other Months are there in the Calender!";
        }

        echo "<br>";
        $signal = "red";
        switch($signal){
            case "red":
                echo "Stop!";
                break;
            case "yellow":
                echo "Get Ready to go";
                break;
            case "green":
                echo "GO!";
            default:
                echo "No Other Signal";
        }
        echo "<br>";
        $a = 10;
        echo $a++."\n";
        echo ++$a;
    ?>
</body>
</html>