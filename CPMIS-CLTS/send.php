<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
$to = ';
$headers = 'From: '.$email. '\r\n';
$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$realMsg = '<html><body>';
$realMsg .='<h2>User Contact Detail</h2>';
$realMsg .= '<b>From:</b> '.$name.'<br/><br/>'.'<b>Email:</b> '.$email.'<br/><br/>'.'<b>Message:</b> '.$message;
$realMsg .= '</body></html>';
 
mail($to, $subject, $realMsg, $headers);
echo "Your email was sent!"; 


?>
