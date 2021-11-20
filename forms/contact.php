<?php
//before running this edit your sendmail/sendmail.ini in xammp folder.

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $con = $_POST["message"];
    $content = "Name: " . $name  . "\nEmail: " . $email . "\nMessage: " . $con;

    /* add your email to receive messages from customers here*/

    if(mail('TOMAIL', $subject, $content, "FROMMAIL")) {
        $sent_message = "Your contact information is received successfully.";
        $type = "success";
        
    }
    require_once "contact.php";
    echo "OK";
?>
