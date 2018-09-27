<html>
<body>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];
if(empty($name)||empty($email)||empty($phone))
{
	echo "fill the require fields";
	
}
else
{
	$to = "info@dolphinariumtrans.com";
$mailto = "omtranslogistics001@gmail.com";

$subject = 'Contact Enquiry '.$name;
$message_body = "Username: " .$name. "\r\n".  "\r\n".
"Email: " .$email. "\r\n".  "\r\n".
"phone: "  .$phone. "\r\n".  "\r\n".
"Comment:" .$comment;


$headers = "From: ".$name."\r\n";
$mail_sent = mail($to,$subject,$message_body, $headers);
$mail_sent = mail($mailto,$subject,$message_body, $headers);


}


?>

</body>
</html>