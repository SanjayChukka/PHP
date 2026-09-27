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
        // Creating a FOlder or Directory
        $dir = "new_folder";
        if (! file_exists($dir)) {
            echo mkdir($dir) . "\n";
            echo "Folder Created Successfully" . "<br>";
        } else {
            echo "Folder Already Exists!" . "<br>";
        }
        */

        /*
       // Folder or Directory Deleting
       if(file_exists($dir)){
            echo rmdir($dir)."\n";
            echo "Folder Deleted Successfully";
       }
       else{
        echo "File Already Deleted";
       }
        */

       /*
        // Opening and reading a Directory
        $dir = "./new_folder";
        if (file_exists($dir)) {
            $dp = opendir($dir);
            eCho "Listing all The Files and Directories in $dir Folder"."<br>";
            for (; $file = readdir($dp);) {
               if(!($file=="."||$file=="..")){
                echo $file."<br>";
               }
            }
        }
        */
        // A
        $dir = "C:/Users/SANJAY/OneDrive/Pictures";
        $url = "http://localhost/Pictures";
        $allowed =["jpeg","jpg"];
        // $allowed =["png","jpg","jpeg"];
        if (file_exists($dir)) {
            $dp = opendir($dir);
            eCho "<h2>Chukka Sanjay</h2>"."<br>";
            for (; $file = readdir($dp);) {
               if(!($file=="."||$file == "..")){
                    // echo substr($file,strpos($file,".")+1)."<br>";
                    $ext = substr($file,strpos($file,".")+1);
                    // echo $file."<br>";
                    // echo "<hr>";
                    if(in_array($ext,$allowed)){
                        echo "<img src='$url/$file' height='300px' width='430px'>";
                    }
               }
            }
        }
    ?>
</body>
</html>