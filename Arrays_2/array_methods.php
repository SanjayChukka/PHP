<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <pre>
    <?php
        $arr = [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
        ];
        // Add & Remove
        $numbers = [10, 20, 30];
        array_push($numbers, 40);
        array_push($numbers, 50);
        print_r($numbers);

        array_pop($numbers);
        print_r($numbers);

        array_unshift($numbers, 5);
        print_r($numbers);

        array_shift($numbers);
        print_r($numbers);

        echo "<hr>";

        // Searching

        $colors = ["red", "blue", "green", "yellow"];
        if (in_array("blue", $colors)) {
            echo "Found<br>";
        }
        if (! in_array("pink", $colors)) {
            echo "Not Found<br>";
        }

        echo "Index value : ".array_search("green",$colors);

        echo "<hr>";

        // echo "Found".in_array("blue",$colors)."<br>";
        echo in_array("pink", $colors) . "<br>";

        // count()
        echo "Count Of Array = " . count($arr) . "<br>";
        echo "<hr>";
        print_r($arr) . "<br>";

        echo "<hr>";

        // <!---------------- Sorting Methods  --------------------->
        echo "Sort Verification = " . sort($arr);
        echo "<hr>";

        print_r($arr);
        echo "<hr>";
        // Ex 1
        $numbers = [50, 10, 40, 20, 30];
        print_r($numbers);
        sort($numbers);

        echo "Ascending : ";
        print_r($numbers);

        echo "Descending : ";
        rsort($numbers);
        print_r($numbers);

        echo "asort() ";
        asort($numbers);
        print_r($numbers);

        echo "arsort() ";
        arsort($numbers);
        print_r($numbers);

        echo "natcasesort() ";
        natcasesort($numbers);
        print_r($numbers);
        
        echo "ksort() ";
        ksort($numbers);
        print_r($numbers);
        
        echo "krsort() ";
        krsort($numbers);
        print_r($numbers);

        // Associative Array
        $student = [
            "name"   => "Sanjay",
            "age"    => 23,
            "course" => "CSE",
        ];

        echo(array_key_exists("course", $student));
        print_r(in_array("CSE", $student));

        echo "<hr>";

        $numbers = [50, 10, 40, 20, 30];
        unset($numbers[2]);
        print_r($numbers);
        
        $numbers = [50, 10, 40, 20, 30];
        $numbers2 = [50, 10, 40, 20, 30];
        //  array_combine($numbers,$numbers2);
        echo "array_combine";
        print_r(array_combine($numbers,$numbers2));
        // print_r(["array_merge" => array_merge($numbers, $numbers2)]);

        echo "array_merge";
        $f = array_merge($numbers,$numbers2);
        print_r($f);

        echo "array_unique";
        print_r(array_unique($f));

        
        ?>
    </pre>
</body>
</html>