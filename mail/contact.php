<?php
// Check for empty fields
if(empty($_POST['name'])  		||
    empty($_POST['email']) 		||
    empty($_POST['message'])	||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
    echo "No arguments Provided!";
    return false;
}
$flag=false;
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$captcha= "";
if(isset($_POST['captcha']))
    $captcha=$_POST['captcha'];
	
$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeU9RsTAAAAACZxHYWJcJyaodJL-87PvbGewW5P&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

if($response['success'] == false)
{
  $flag=false;
}
else
{
  $flag=true;
}

if($flag){
	// Create the email and send the message
	$to = 'info@agroatitlan.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Website Contact Form:  $name";
	$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
	$headers = "From: noreply@agroatitlan.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$headers .= "Reply-To: $email_address";

	if (mail($to,$email_subject,$email_body,$headers)) {
		echo 'ok';
	} else {
		echo 'error';
	}
}else{
	echo 'error';
}
