<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>
<body>
    <!--
    <?php
        // $isUserLoggedIn = true;
        // if($isUserLoggedIn){
        //     header("Location:home.php");
        // }
        // else{
        //     echo "Sorry! Nothing Found";
        // }
    ?>
    -->
    <!---
    <script>
        window.location = "home.php";
    </script>
    --->
    <?php
        $time = date("Y-m-d h:i:s A");
        header("Content-Disposition:attachment;filename=".$time.".zip");
        readfile("folder.zip");
    ?>
</body>
</html>