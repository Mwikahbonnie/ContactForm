<?php 
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$formcontent="From: $firstname \n $lastname \n phone: $phone \n Message: $message";
$recipient="mwikahbonnie@gmail.com";
$subject="Contact Form";
$mailheader="From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>