<?php

$email = $_POST['email1'];
$to = $email;
$subject = "Request For Re-setting Password";
$message = " To reset your password click the link : http://127.0.0.1/OTT%20PLATFORM/reset-password.html";
$header = "From : tanooj.18BCE7281@vitap.ac.in";

if(mail($to,$subject,$message,$header))
{
    echo "Mail Sent ";
    header("location:login.html");
}
else
{
    echo "Mail Not sent";
    header("location:forgot-password.html");
}
