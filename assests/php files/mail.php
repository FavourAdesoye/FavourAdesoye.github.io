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


    ?>

 <?php


    // $name = $_POST['name'];
    // $visitor_email = $_POST['email'];
    // $visitor_number = $_POST['number'];
    // $message = $_POST['message'];
    // $email_subject = "email-s";

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;

    // $mail = new PHPMailer(true);
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // $mail->isSMTP();
    // $mail->SMTPAuth = true;
    // $mail->Host = "smtp.gmail.com.";
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    // $mail->Port = 587;
    // $mail->Username = "favour.adesoye09@gmail.com";

    // $mail->Password = "Olasubomi1*";
    // $mail->setFrom($visitor_email, $name);
    // $mail->addAddress("favour.adesoye09@gmail.com", "Favour");
    // $mail->Subject = $email_subject;
    // $mail->Body = $message;
    // $mail->send();

    // echo " email sent!"

    ?>

 //<?php

    // use PHPMailer\PHPMailer\PHPMailer;

    // if (isset($_POST['name']) && isset($_POST['email'])) {

    //     $name = $_POST['name'];
    //     $visitor_email = $_POST['email'];
    //     $visitor_number = $_POST['number'];
    //     $message = $_POST['message'];
    //     $email_subject = "email-s";
    //     $message = $_POST['message'];

    //     require_once "PHPmailer/PHPMailer.php";
    //     require_once "PHPmailer/SMTP.php";
    //     require_once "PHPmailer/Exception.php";
    //     $mail = new PHPMailer();


    //     $mail->isSMTP();
    //     $mail->Host = "smtp.gmail.com.";
    //     $mail->SMTPAuth = true;
    //     $mail->Username = "favour.adesoye09@gmail.com";
    //     $mail->Password = "Olasubomi1*";
    //     $mail->Port = 465;
    //     $mail->SMTPSecure = "ssl";

    //     //email settings

    //     $mail->isHTML(true);
    //     $mail->setFrom($visitor_email, $name, $visitor_number);
    //     $mail->addAddress("favour.adesoye09@gmail.com");
    //     $mail->Subject = ("$visitor_email($subject)");
    //     $mail->Body = $message;

    //     if ($mail->send()) {
    //         $status = "success";
    //         $response = "Email is sent!";
    //     } else {
    //         $status = "failed";
    //         $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    //     }
    //     exit(json_encode(array("status" => $status, "response" => $response)));
    // }

    //  
    ?>