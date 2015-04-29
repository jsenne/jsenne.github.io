<?php 

session_start();

require_once 'php_libs/PHPMailerAutoload.php';

$errors = [];

if(isset($_POST['name'], $_POST['email'], $_POST['tel'], $_POST['contact_preference'], $_POST['g-recaptcha-response'], $_POST['message'])){

	$fields = [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'telephone' => $_POST['tel'],
		'contact preference' => $_POST['contact_preference'],
		'captcha' => $_POST['g-recaptcha-response'],
		'message' => $_POST['message']
	];

	foreach($fields as $field => $data){
		if(empty($data)){
			$errors[] = "The $field field is required.";
		};
	}; //end foreach

	if(empty($errors)){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$tel = $_POST['tel'];
		$contact_preference = $_POST['contact_preference'];
		$message = $_POST['message'];

		$mailer = new PHPMailer;
		
		$mailer->isSMTP();
		$mailer->SMTPAuth = true;

		$mailer->Host = 'smtp.gmail.com';
		$mailer->Username = 'mailto.yodersradiator@gmail.com';
		$mailer->Password = ''; //make sure to add password before going live
		$mailer->SMTPSecure = 'ssl';
		$mailer->Port = 465;

		$mailer->isHTML();

		$mailer->Subject = 'Contact form submitted';
		$mailer->Body = "<p><strong>Name:</strong> $name <p><strong>E-mail:</strong> $email</p> <p><strong>Phone:</strong> $tel</p> <p><strong>Preferred Contact Method: </strong>$contact_preference</p> <p><strong>Message:</strong> <em>$message</em></p> <br><hr><p>Do not reply directly to this message. Right-click the user's email address, click 'copy email address', create a new email message, and paste the user's address in the 'To' field.";
	
		$mailer->FromName = 'Contact';

		$mailer->AddAddress('mailto.yodersradiator@gmail.com', "Yoder's Radiator");

		if($mailer->send()){
			header('Location: contact-thanks.php'); //redirect to thank-you page after successful form submission;
			die();
		} else {
			$errors[] = "Sorry, there was an error while processing your message. Please try again later.";
		} //end if/else send

	}

} else {

	$errors[] = 'Something went wrong. Please try again.';

}; //end if/else

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $fields;

header('Location: contact.php'); //redirect back to contact page if the submission did not go through;

?>