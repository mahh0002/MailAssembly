<?php
//Recipient settings - Note that these might need adjustment depending on the e-mail client you are using
$from = $_POST['email'];
$subject = $_POST['name'] . "\r\n" . $_POST['email'];
$to = "your-email@example.com"; //Set to your e-mail

//Headers
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

//Mailing desired variables
mail($from,$subject,$to,$headers);

//Action on form submission
header("Location: http://mailassembly.cc"); //Set to your URL
die();
?>
