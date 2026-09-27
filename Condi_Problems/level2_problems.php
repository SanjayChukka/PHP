<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements 2</title>
</head>
<body>
    <?php
    //     //Student Grade System
        // $marks = 60;
        // // if ($marks > 0 && $marks <= 100) {

        //     if ($marks >= 90 && $marks <= 100) {
        //         echo "A Grade";
        //     } elseif ($marks >= 80 && $marks < 90) {
        //         echo "B Grade";
        //     } elseif ($marks >= 80 && $marks < 90) {
        //         echo "C Grade";
        //     } elseif ($marks >= 80 && $marks < 90) {
        //         echo "D Grade";
        //     } elseif ($marks >= 80 && $marks < 90) {
        //         echo "E Grade";
        //     }
        //     else echo "Invalid Marks<br>";
        // }
    
        //    // Discount
        //     $amt = 5000;
        //     $dic = 0;
        //     if($amt>=5000){
        //         $dic = $dic + $amt * 20/100;
        //         $final_amt = $amt - $dic;
        //         echo "Original Amount = $amt<br>";
        //         echo "Discount Amount = $dic<br>";
        //         echo "Final Amount = $final_amt<br>";
        //     }
        //     else if($amt<5000 && $amt >=3000){
        //         $dic = $dic + $amt * 10 / 100;
        //         $final_amt = $amt - $dic;
        //         echo "Original Amount = $amt<br>";
        //         echo "Discount Amount = $dic<br>";
        //         echo "Final Amount = $final_amt<br>";

        //     }
        //     else if($amt<3000 && $amt >=1000){
        //         $dic = $dic + $amt * 5 / 100;
        //         $final_amt = $amt - $dic;
        //         echo "Original Amount = $amt<br>";
        //         echo "Discount Amount = $dic<br>";
        //         echo "Final Amount = $final_amt<br>";
        //     }
        //     else if($amt<1000 && $amt>=0){
        //         echo "No Discount, Sorry!";
        //     }
        //     else{
        //         echo "Please Buy Something!";
        //     }


        // // UserName Availability 
        // $user = "Mohan";
        // $used = ["admin","sanjay","john","developer"];
        // if(in_array($user,$used)){
        //     echo "UserName already Exists";
        // }
        // else{
        //     echo "UserName is Available";
        // }


        // Ternary Operator
        $age = 23;
        echo ($age >= 18)?"Adult<br>":"Minor<br>";

        // Even / Odd
        $num = 7;
        echo ($num%2==0)?"Even<br>":"Odd\n9";

        //Login Status
        $isLogIn = true;
        echo ($isLogIn)?"Welcome\n":"Please Login\n";
    ?>
</body>
</html>