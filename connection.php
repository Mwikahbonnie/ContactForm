<?php
$servername = "localhost";
$firstname = "firstname";
$lastname = "lastname";
$email = "email";
$phone = "phone";

$conn = mysqli($servername, $firstname, $lastname, $email, $phone);
if($conn->connect_error){
    die("send failed! ".$conn->coonect_error);
}
echo "message sent successfully";
?>