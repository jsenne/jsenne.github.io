<?php 
	echo "Thanks for reaching out to us! We will get back to you as soon as possible!";
	var_dump($_POST);
	$name = $_POST["name"];
	$email = $_POST["email"];
	$tel = $_POST["tel"];
	$message = $_POST["message"];
	$contact_preference = $_POST[""];
	echo "You have a new message from $name, submitted via the contact form on YodersRadiator.com!
		They can be reached at $email or $tel, but prefer $contact_preference.
		$name's message follows:
		$message
	";
?>