<?php
    echo "<pre>";
    print_r($_POST);
    // http://localhost/c_php/Basics/S_G_Var/get/save.php?name=Sanjay+Chukka&email=sanjaychukka1312%40gmial.com&mobile=7032412044&city=Hyderabad&submit=Save
      
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $pwd = $_POST['pwd'];

    echo "Name : ".$_POST['name']."<br>";
    echo "Email : ".$_POST['email']."<br>";
    echo "Mobile : ".$_POST['mobile']."<br>";
    echo "City : ".$_POST['city']."<br>";
    echo "Password : ".$_POST['pwd']."<br>";

?>