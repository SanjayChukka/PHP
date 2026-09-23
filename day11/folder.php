<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dir = "C:/Users/SANJAY/OneDrive/Desktop/example_folder";
    echo file_exists($dir)."<hr>";
    if(!file_exists($dir)){
        mkdir($dir);
        echo "$dir Directory Created Successfully";
    }
    else{
        echo "$dir Already Exists";
    }
    echo "<hr>";
    // $dir = "C:/Users/SANJAY/OneDrive/Desktop/example_folder";
    echo file_exists($dir)."<hr>";
    if(file_exists($dir)){
        rmdir($dir);
        echo "$dir Successfully Deleted the Folder";
    }
    else{
        echo "$dir Already Deleted";
    }
    // Warning: rmdir(C:/Users/SANJAY/OneDrive/Desktop/example_folder): Permission denied in C:\xampp\htdocs\c_php\Basics\day11\folder.php on line 23
// C:/Users/SANJAY/OneDrive/Desktop/example_folder Successfully Deleted the Folder
    ?>
</body>
</html>