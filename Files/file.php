<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // File Reading 
        /*
        $file = "hello.txt";
        $fp = fopen("hello.txt","r");
        echo $fp."<hr>";

        // echo fread($fp,10)."<hr>";

        echo filesize("hello.txt")."<hr>";

        echo fread($fp,filesize("hello.txt"))."<hr>";
        */

        /*
        // File writing 
        $file = "hello.txt";
        $fp = fopen("hello.txt","w");
        echo fwrite($fp,"I am from Hyderabad, ")."<hr>";
        echo fwrite($fp,"Working on PHP file handling methods")."<hr>";
        $fp = fopen("hello.txt","r");
        echo fread($fp,filesize("hello.txt"));
        */
        // $fp = fopen("hello.txt","r");
        // echo fread($fp,filesize("hello.txt"));
        // echo strlen("Working on PHP file handling methods")

        /*
        // Appending Text into file 
        $file = "hello.txt";
        $fp = fopen("hello.txt","r");
        fwrite($fp,"Hey there, how are you ");
        fwrite($fp,"are you doing well ");
        */
        /*
        // creating a file using php 

        // echo fopen("welcome.php","r");
        // Warning: fopen(welcome.php): Failed to open stream: No such file or directory 
        
        $fp = fopen("welcome.txt","w");
        echo fwrite($fp,"Hello World! This is Sanjay");
        */
        /*
        // file gets method 
        $file = "welcome.txt";
        $fp = fopen($file,"r");
        // echo fgets($fp);
        // echo fgets($fp);
        // echo fgets($fp);
        */
        /*
        // echos line by line 
        while($line = fgets($fp)){
            echo $line."<br>";
        }
        */

        // readfile() method 
        // echo readfile("hello.txt");

        /*
        // API calls 
        // file_get_contents() methods
        echo file_get_contents("hello.txt");
        $data = json_decode("php:input");
        print_r($data);
        */
        ?>
</body>
</html>