<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$querry = $_POST['querry'];
$message =$_POST['message'];

$email_form ='ksco@coloring.com';

$email_subject ='New Color Addition';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                 "User Querry: $querry.\n".
                    "User Message: $message.\n";



$to = 'mihirsonis2809@gmail.com';
$headers = "Form: $email_from \r\n";
$headers .= "Reply-To : $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");
?>