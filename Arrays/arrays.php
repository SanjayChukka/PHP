<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>  
    <pre>
        <?php 
        // Numeric Array
        $num = [1,2,3,4,5,6];
                print_r($num);
                echo $num[3];

        // String Array
        $arr = ["Sanjay","Mohan","Akhil","Dipin","Sagar"];
                print_r($arr)."<br>";
                echo $arr[0]."<br>";

        // Mixed Array
        $mix = ["sanjay",1,true];
                print_r($mix);

        // Associative Array
        $user =  [
            "name" => "Sanjay",
            "city" => "Hyderabad",
            "state" => "Telengana"
        ];
                print_r($user);
                echo $user["name"];
                // echo $user[0];  // Warning:  Undefined array key 0 
                
                // echo $user["Sanjay"]; // Undefined array key "Sanjay"

        // Indexed Array
        $num2 =  [
            1 => 20,
            2 => 40,
            3 => 60
        ];
                print_r($num2);
                echo $num2[3];
                 

        // Mixed Associative Array
        $mix2 = [
            11 => "Good",
            12 => "To",
            13 => "See",
            14 => "You",
            14 => "Here",   // Overrides the 14 
            2002    // Index of this is 15, 
            // Like it starts again with the next sequence of highest index
        ];
        // echo $arr;  Gives Warning
        print_r($mix2);

        // Array in Array
        $num = [1,2,3,[100,200,300],4,5,6];
        print_r($num);
        echo $num[3][0];

        // Example 
        $arr = [1=> true, true => true, true => 1,1 =>1];
        print_r($arr);

        // Example 2 
        $num = [10,20,30,[100,200,300],40,4=>50,60];  
        // 40 will not get printed as it is overrided by giving index value
        $num = [10,20,4=>30,40,50,60];  
        // Changes the Key value after key 4 to 5,6,7.. and so on 
        print_r($num);
        // Example 3
        $num = [10,20,30,40,50,60];  
        print_r($num);
        echo $num[3];
        // echo $num[6];   // Undefined array key 6 
        echo "<br>";
        for($i = 0;$i < count($num);$i++){
            echo $num[$i]." ";
        }
        ?>
    </pre>
    <pre>
        hi adhkajhdi
        hdjasdjh
                    khfihfijh
                    ijdihid
        duhfuhfioif
        jijfgj           fkgjfdjkghnfjgh
                mndnnfnfjkjgk
    </pre>
    <p>
        hijfopehfi
                        oihuirhgfhoi
                        fbsjfsjihf
            fjsjfhjioj
    </p>
</body>
</html>