<?
//Recipient settings
$from = $_POST['email'];
$subject = $_POST['name'] . "\r\n" . $_POST['email'];
$to = "your-email@example.com";

//Headers
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

//Mailing desired variables
mail($from,$subject,$to,$headers);

//Action on form submission
echo "Mail Sent.";
?>
