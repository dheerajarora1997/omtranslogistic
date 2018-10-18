<?php 
    $name     = $_POST['name12'];
    $email    = $_POST['email12'];
    $code     = $_POST['phone1'];
    $phone    = $_POST['phone2'];
	$date     = $_POST['date12'];
	$ocity    = $_POST['ocity12'];
	$dcity    = $_POST['dcity12'];
    $vehicle  = $_POST['vehicle12'];
    $service  = $_POST['subject'];
    $message  = $_POST['message12'];

if(empty($name)||empty($email)||empty($code)||empty($phone)||empty($date)||empty($ocity)||empty($dcity)||empty($vehicle)||empty($service)||empty($message))
{
	 echo "<script>alert('Sorry Request not send');
	       exit();
		   </script>";
}
	
else{
$to = "omtranslogistics001@gmail.com";
$mail = "digitalshubham1@gmail.com";

$subject = 'Contact Request Submitted by '.$name;
$headers = 'From: '.$name.'<'.$email.'>'. "\r\n";

$message_body = "Username: " .$name. "\r\n".  "\r\n".
"Number: " .$code.$phone. "\r\n".  "\r\n".
"Email: " .$email. "\r\n".  "\r\n".
"Service: " .$service. "\r\n".  "\r\n".
"Date: " .$date. "\r\n".  "\r\n".
"Origin City: " .$ocity. "\r\n".  "\r\n".
"Destination City: " .$dcity. "\r\n".  "\r\n".
"Vehicle: " .$vehicle. "\r\n".  "\r\n".
"Message: " .$message;

$mail_sent = mail($to,$subject,$message_body, $headers);
$mail_sent = mail($mail,$subject,$message_body, $headers);
if($mail_sent)
        echo "<script>alert('Thank you. we will get back to you');
               window.location='thank-you.html';exit();</script>";
    else
        echo "<script>alert('Sorry Request not send');
             window.location='thank-you.html';exit();</script>";
}
?>