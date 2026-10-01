<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="p4.php">
        Person3 : <input type="text" name = "num3"> 
        <input type="submit" >
    </form>
        <?php
        setcookie("number2","$_POST[num2]"); 
    ?>
</body>
</html>