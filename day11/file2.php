<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        // is file 
        echo is_file("hello.txt")."<hr>";
        var_dump(is_file("hello.txt"))."<hr>";

        echo  is_dir("hello.txt")."<hr>";
        echo (is_dir("hello.txt"))."<hr>";

        $file = "welcoeme.txt";

        if(file_exists($file)){
            echo file_get_contents($file);
        }
        else{
            echo "<p>Sorry! Unable to get the data. File \"$file\" is not available  </p>";
        }
        */

        // unlink file (Delete File)
        $file = "hello.txt";
        if(file_exists($file)){
            echo unlink($file);
            echo "<p>File Deleted Successfully</p>";                             
        }
        else{
            echo "Sorry! file\"$file\" may already deleted";
        }
    ?>
</body>
</html>