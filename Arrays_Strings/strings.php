<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
        // Double Quote
        echo 'Sanjay';
        echo "<hr>";
        // SIngle Quote
        echo "Sanjay";
        echo "<hr>";
        
        // Basic Heredoc example
        echo <<<END
        a
            b
                c
        END;
        echo "<hr>";
        
        // Nowdoc string quoting
        echo <<<'EOD'
        Example of string spanning multiple lines
        using nowdoc syntax. Backslashes are always treated literally,
        e.g. \\ and \'.
        EOD;
        echo "<hr>";

        $email = "sanjay@gamil.com here is my email";
        echo strpos("$email","here");

        echo "<hr>";

        // $str = "ABCDf";
        // $len = strlen($str)-1;

        // for($i = 0;$i < $len;$i++){
        //     $temp = $str[$i];
        //     $str[$i] = $str[$len];
        //     $str[$len] = $temp;
        //     $len--;
        // }
        // echo $str;

        $str = "sanjay chukka is a Gentle Man";
        echo $str."<hr>";

        // length
        echo strlen($str)."<hr>";

        // To Lower 
        echo strtolower($str)."<hr>";

        // To Upper
        echo strtoupper($str)."<hr>";

        // Upper Case
        echo ucwords($str)."<hr>";
        // echo ucwords(strtolower($str));
        
        // string to Array
        // echo explode($str)."<hr>";  // expects at least 2 arguments, 1 given 
        // echo explode("",$str)."<hr>";  // ($separator) cannot be empty
        // echo explode(" ",$str)."<hr>";  // Warning: Array to string conversion
        echo "<pre>";
        print_r(explode(" ",$str)); 

        // $str = "abcd4";
        echo "</pre><hr>";
        echo $str."<hr>";

        // Array to String
        $nums = [10,20,30,40];
        // echo $nums;     //Warning: Array to string conversion 
        echo "$".implode(" $",$nums)."<hr>";

        // String Position 
        // echo strpos($str,"gen");        // starting index of the string 
        // strpos is case  sensitive 
        echo stripos($str,"man")."<hr>"; // Not case sensitive 

        // substring
        echo strpos($str,"u")."<hr>";
        echo substr($str,5)."<hr>";  // value to end 
        echo substr($str,7,6)."<hr>"; // starts from first value and goes till the length which we give 
        

        // str shuffle
        // OTP example 
        $str = "1234567890987654321";
        echo substr($str,3,6)."<hr>";
        echo substr(str_shuffle($str),3,6)."<HR>";
        
        $str = "1234567890987654321zxcvbnmasdfghjklqwertyuiopZXCVBNMLKJHGFDSAOPIUYTREWQ";
        echo substr(str_shuffle($str),6,10)."<hr>";
        echo "<pre>";
        $str = "            Sanjay's iphone      ";
        echo $str." to ";
        echo addslashes($str)."<hr>";
        echo "</pre>";
        echo trim($str).'<hr>';

        $pwd = "Sanjay@123";
        // echo password_hash($pwd,PASSWORD_DEFAULT)."<hr>";  
        //$2y$10$XgJduKjIJTe2/BuHr.RVb.b1ljJHjKWvaa9VkPvbsrm7pJUSOB3aO

        // echo password_hash($pwd,PASSWORD_ARGON2ID);
        // $argon2id$v=19$m=65536,t=4,p=1$VHhyb2x0M2NHSVBIZHo0bA$szcdmOqaf4ahuzy58KqkkWrWuFea2M5PFjgpxjjmUIw

        $dbpwd = '$2y$10$Twy9lq63TwuAPQ8SV5VKTugF3ONmh4pZJH0DTCheusvJKvht84Jl.';
        echo password_verify($pwd,$dbpwd);

        // MD5
        echo md5($pwd);   // hashcode doesnot change if refresh happens  
        ?>
</body>
</html>