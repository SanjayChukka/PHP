<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending a Mail</title>
</head>
<body>
    <?php
        $to = "sanjaychukka1312@gmail.com";
        $subject = "Sending a Mail";
        $message = "Sent a mail through php using SMPT configuration settings in php";
        $header = "Sender : Sanjay Chukka For testing mail in PHP";
        if(mail($to,$subject,$message,$header)){
            echo "Mail Sent Successfully";
        }
        else{
            echo "Unable to send Mail";
        }
    ?>
</body>
</html>