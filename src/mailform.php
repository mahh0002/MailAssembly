<?php
sleep(30); //delay execution 30 seconds in order to display status message on form submission

//Recipient settings (Note: these settings might need adjustment depending on the webmail provider/service you are using)
$from = "New sign-up by " . $_POST['name'];
$subject = $_POST['name'] . "\r\n" . $_POST['email'];
$to = "your-email@example.com"; //Set to your e-mail

//Headers
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

//Mailing desired variables
mail($from,$subject,$to,$headers);

//Action on form submission
//header("Location: http://mailassembly.cc"); //Set to your URL
//die();
?>
