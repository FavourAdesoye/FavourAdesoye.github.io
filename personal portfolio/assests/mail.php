<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_number = $_POST['number'];
$message = $_POST['message'];
$email_from = 'adesoyeshubi@gmail.com';
$email_subject = "email-s";
$email_body = "User Name: $name.\n" . "User Email: $visitor_email.\n" . " User Message: $message.\n";
$to = "adesoyeshubi@gmail.com";
$headers = "From: $visitor_email, $visitor_number \r\n";
$headers .= "reply-to: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: index.html")
    or die("sorry! cant send your message at this time");

echo "message sent ";
