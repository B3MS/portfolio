<?php

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $header = "From: {$name}<{$email}>\r\n";
    $recipient = "jensrosseel.business@gmail.com";
    
    mail($recipient, $subject, $message, $header)
    or die("Error!");

    echo "<script>alert('Thank you for your message!');
    window.location = './index.html';</script>";
}
else
{
    header("Location: index.html");
    exit;
}