<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date anb Time</title>
</head>
<body>
    <h2>Date and Time</h2>
    <h4>Year</h4>
    <?php
    echo date("Y")."<hr>"; // 2026
    echo date("y")."<hr>"; // 26
    ?>
    <h4>Month</h4>
    <?php
    echo date("m")."<hr>";  // 09
    echo date("n")."<hr>";  // 9
    echo date("M")."<hr>";  // Sep
    echo date("F")."<hr>";  // September
    ?>
    <h4>Date</h4>
    <?php
    echo date("d")."<hr>";  // 21
    echo date("j")."<hr>";  // 21  if 1 it shows 01
    echo date("l")."<hr>";  // Monday
    echo date("D")."<hr>";  // Mon
    ?>
    <h4>Date Formats</h4>
    <?php
    // Monday 21 September 2026 
    echo date("l j D Y")."<hr>";

    // 21-Jul-2021
    echo date("j-M-Y");
    
    ?>
    
</body>
</html>