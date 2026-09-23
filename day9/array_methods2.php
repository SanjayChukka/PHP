<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Methods 2</title>
</head>
<body>
    <pre>
    <?php
            $numbers = [50, 10, 40, 20, 30];
        unset($numbers[2]);
        print_r($numbers);
        
        $numbers = [50, 10, 40, 20, 30];
        $numbers2 = [50, 10, 40, 20, 30];
        //  array_combine($numbers,$numbers2);
        echo "array_combine : ";
        print_r(array_combine($numbers,$numbers2));
        // print_r(["array_merge" => array_merge($numbers, $numbers2)]);

        echo "array_merge : ";
        $f = array_merge($numbers,$numbers2);
        print_r($f);

        echo "array_unique : ";
        print_r(array_unique($f));

        $numbers2 = [50, 10, 40, 20, 30];
        echo "array_splice : ";
        print_r($numbers2);
        // print_r(array_splice($numbers2,2));
        // print_r(array_splice($numbers2,1,2,50));
        print_r(array_splice($numbers2,2,1));
        print_r($numbers2);


    ?>
    </pre>
</body>
</html>