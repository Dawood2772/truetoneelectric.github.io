<?php
//get data from form  
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];
	$From_email= 'Hz Associates';
	$Reply_to= $email;
	$to= "dawooddalvi16@gmail.com";
	$subject = "Mail From Contact Form";
	$format='Name'.$name.'<br> Email'.$email.'<br>Phone'.$phone.'<br> Message'.$message;
	$headers .= "MIME-Version: 1.0n";
	$headers .= "Content-type: text/html; charset=iso-8859-1n";
	$headers .= "From: ".$name." <".$From_email.">n";
	$headers .= "Reply-To: ".$ReplyTo."n";
	$headers .= "X-Sender: <".$From_email.">n";
	$headers .= "X-Mailer: PHPn";
	$headers .= "X-Priority: 1n";
	$headers .= "Return-Path: <".$From_email.">n";
	$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
	$headers = "From: noreply@yoursite.com" . "\r\n" ;
	if(mail($toemail, $subject, $message, $headers,'-f'.$FromEmail) ){
		$hide=1;
	  
	   echo '<div class="success"><center><span style="font-size:100px;">&#9989;</span></center> <br> Thank you <strong>'.$name.',</strong> Your message has been sent. We will reply soon as possible. </div> '; 
		
  } else {
	  echo "The server failed to send the message. Please try again later or Make sure , you are using live server for email.";
} 

		  }

//redirect
header("Location:services.php");
?>