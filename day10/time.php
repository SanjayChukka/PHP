<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo date("h:i:s A");
        echo date_default_timezone_get() . "<hr>"; 
        // Europe/Berlin
        // but we can change in the configuration file of php.ini as Asia/Kolkata

        date_default_timezone_set("Asia/Kolkata");
        echo date_default_timezone_get(); // Asia/Kolkata
        echo date(": h:i:s A") . "<hr>";

        // time()
        // echo time(); // 1789992962 Unix timestamp.
        // This number represents the number of seconds elapsed 
        // since January 1, 1970, 00:00:00 UTC.
        // Unix Epoch
        // Why 1970? It's simply a conventional starting point chosen by Unix systems
        echo date("Y - m - d h:i:s A", time()) . "<hr>";
        $timestamp = time() - 84600; // 24 hours ago
        echo date("Y-m-d h:i:s A", $timestamp)."<hr>";

        // // string time to time

        echo date("Y-m-d h:i:s A", strtotime("2weeks")) . "<hr>";

        echo date("l Y-m-d h:i:s A", strtotime("2weeks")) . "<hr>";     // Monday 26-10-05 08:46:03 PM
        echo date("l Y-m-d h:i:s A", strtotime("jul 4 2003")) . "<hr>";  // Friday 02-12-13 12:00:00 AM
        echo date("l Y-m-d h:i:s A", strtotime("-2 weeks")) . "<hr>";  // Monday 26-09-07 08:46:03 PM
        $time = time()-0;
        echo date("l Y-m-d h:i:s A", $time) . "<hr>";  // Thursday 1970-01-01 05:30:00 AM
        echo date("l Y-m-d h:i:s A", strtotime("January 1, 1970, 00:00:00")) . "<hr>";  // Thursday 1970-01-01 12:00:00 AM
        echo date("l Y-m-d h:i:s A", 854615451) . "<hr>";  // Thursday 1997-01-30 02:40:51 PM
        echo date("l y-m-d h:i:s A", strtotime("sep 10th 2007")) . "<hr>";  // Thursday 1997-01-30 02:40:51 PM

    ?>
</body>
</html>