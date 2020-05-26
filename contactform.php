<?php

if(isset($_POST['submit'])) {
	$firstName = $_POST['first-name'];
	$lastName = $_POST['last-name'];
	$mailFrom = $_POST['email'];
	$phoneFrom = $_POST['phone'];
	$mailSubject = $_POST['subject'];
	$message = $_POST['message'];


	$mailTo = "yoojustin45@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from " .$firstName.$lastName.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: contactus.php?mailsend");
}