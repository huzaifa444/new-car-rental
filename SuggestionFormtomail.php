<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"  && isset($_POST["Submitform"])) {

    $suggestion = trim($_POST['Suggest']);


    //Email  Receiver 
    $to = 'aqCars@gmail.com';

    //Subject of Your Email
    $subject = "AQ Cars Suggestions From User";

    //Message of the Email
    $message = "Message = " . $suggestion;

    //Sending the Email ..... its only works when our website is Live Because by default , Our 
    //Operating System (Windows) donot have any mailing server (Like SMTP)... Linux operating system
    //have installed in them by default and we know that when we host our website on server (it has Linux).
    mail($to, $subject, $message);


    header("Location: Home.php");
    exit;
}
