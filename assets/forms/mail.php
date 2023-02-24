<?php 

	$to = "ihopenone@gmail.com"; 
	$from  = $_POST['email']; 
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$c_name = $_POST['c_name'];
	$c_address = $_POST['c_address'];
	$phone = $_POST['phone'];
	$note = $_POST['note'];

	$subject = "Career Form submission";
	$message =  "Sender: " . $f_name . " " . $l_name ."\nCompany Name: " .  $c_name ."\nCompany Address: " .  $c_address ."\nEmail Address: " .  $from ."\nPhone Number: " .  $phone ."\n\nMessage: "."\n". $note;

	$headers = 'From: ' . $f_name ;
	mail($to, $subject, $message, $headers);

?>