<?php

// $name = $_POST['name'];
// $email = $_POST['email'];
// $subjects = $_POST['subject'];
// $message = $_POST['message'];

// $to = "wchitapure@gmail.com";


// $subject = "mail from portfolio";
// $txt = "name = " . $name . "\r\n Email = " . $email . "\r\n subject = " . $subjects . "\r\n message = " . $message ;


// $mailheader = "From: $email \r\n";
// mail($name , $email , $subjects , $message) or die("Error!");
// echo "Thank You!";



$name = $_POST['name'];
$email = $_POST['email'];
$subjects = $_POST['subject'];
$message = $_POST['message'];

if( empty($name) || empty($email) || empty($subjects) || empty($message) )
{
    echo "please fill the all the field" ;
}
else
{
mail("wchitapure@gmail.com", "mail from portfolio ", $subjects );
}



?>