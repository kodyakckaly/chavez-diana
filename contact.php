<?php
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['asunto'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['asunto'];
$to = 'kodyakckaly@hotmail.com';
$email_subject = "Contact Diana Chavez";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$asunto";
$headers = "From: kodyakckaly@hotmail.com\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
