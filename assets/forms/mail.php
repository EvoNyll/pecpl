<?php 

	$to = "admin@pecpl.tech"; 
	$from  = $_POST['email']; 
	$name = $_POST['name'];
	$c_name = $_POST['c_name'];
	$c_address = $_POST['c_address'];
	$phone = $_POST['phone'];
	$note = $_POST['note'];

	$subject = "Feedback/Inquiry";
	$message =  "MESSAGE ARRIVED VIA PECPL TECH WITH FOLLOWING DETAILS\n-- \nName: " . $name . "\nCompany Name: " .  $c_name ."\nCompany Address: " .  $c_address ."\nEmail Address: " .  $from ."\nPhone Number: " .  $phone ."\n\nMessage "."\n--\n". $note;

	$headers = 'From: ' . $name ;
	mail($to, $subject, $message, $headers);

?>