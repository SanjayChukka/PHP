<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$GLOBALS</title>
    </title>
</head>
<body>
        <?php
        $name = "Sanjay";
        $place = "Hyderabad";
            function welcome()
            {
                global $name;
                echo $name; // Sanjay   
                // echo $name;  // Undefined variable $name
                // print_r($GLOBALS);
                echo "Welcome ".$GLOBALS['name']."! from city ".$GLOBALS['place'];
            }
            welcome();
        ?>
</body>
</html>