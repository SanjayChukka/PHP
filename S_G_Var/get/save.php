<?php
    echo "<pre>";
    print_r($_GET);
    // http://localhost/c_php/Basics/S_G_Var/get/save.php?name=Sanjay+Chukka&email=sanjaychukka1312%40gmial.com&mobile=7032412044&city=Hyderabad&submit=Save
      
    $name = $_GET['name'];
    $email = $_GET['email'];
    $mobile = $_GET['mobile'];
    $city = $_GET['city'];
    $pwd = $_GET['pwd'];

    echo "Name : ".$_GET['name']."<br>";
    echo "Email : ".$_GET['email']."<br>";
    echo "Mobile : ".$_GET['mobile']."<br>";
    echo "City : ".$_GET['city']."<br>";
    echo "Password : ".$_GET['pwd']."<br>";

?>