<?php
	require './phpmailer/PHPMailerAutoload.php';
	include("./phpmailer/class.smtp.php");

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 0;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'andreasapos12@gmail.com';                 // SMTP username
	$mail->Password = 'andrikos12';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('andreasapos12@gmail.com', 'Corfu Dream');
	$mail->addAddress('andreasapos12@gmail.com');               // Name is optional
	$mail->isHTML(true);                                  // Set email format to HTML
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$text=$_POST['text'];
	if (isset($_POST['checkin'])){
		$checkin=$_POST['checkin'];
		$checkout=$_POST['checkout'];
		$mail->Subject = 'email from: '.$firstname.' '.$lastname;
		$mail->Body    = '<b>DETAILS:</b><br><br><b>First Name: </b>'.$firstname.'<br><b>Last Name: </b>'.$lastname.'<br><b>Email Address: </b>'.$email.'<br><b>Phone Number: </b>'.$phone.'<br><b>Text: </b>'.$text.'<br><b>Interesting for checking in: </b>'.$checkin.'<br><b>Interesting for checking out: </b>'.$checkout;
	}if (isset($_POST['property_type'])) {
			$property_type=$_POST['property_type'];
			$property_name=$_POST['property_name'];
			$property_style=$_POST['property_style'];
			$location=$_POST['location'];
			$rooms=$_POST['rooms'];
			$bathrooms=$_POST['bathrooms'];
			$guests=$_POST['guests'];
			$promotion=$_POST['promotion'];
			$management=$_POST['management'];
			$maintance=$_POST['maintance'];

			$mail->Subject = 'New Home Owner Inquire from: '.$firstname.' '.$lastname;
			$mail->Body    = '<b>DETAILS</b><br><br><b>First Name: </b>'.$firstname.'<br><b>Last Name: </b>'.$lastname.'<br><b>Email Address: </b>'.$email.'<br><b>Phone Number: </b>'.$phone.
			'<br><br><b>PROPERTY INFO</b><br><br><b>Property Type: </b>'.$property_type.'<br><b>Property Name: </b>'.$property_name.'<br><b>Property Style </b>'.$property_style.'<br><b>Location: </b>'.$location.
			'<br><b>Rooms: </b>'.$rooms.'<br><b>Bathrooms: </b>'.$bathrooms.'<br><b>Guests: </b>'.$guests.'<br><b>Property Promotion: </b>'.$promotion.'<br><b>Property Management: </b>'.$management.
			'<br><b>Property Maintance: </b>'.$maintance;
	}else{
	$mail->Subject = 'email from: '.$firstname.' '.$lastname;
	$mail->Body    = '<b>DETAILS:</b><br><br><b>First Name: </b>'.$firstname.'<br><b>Last Name: </b>'.$lastname.'<br><b>Email Address: </b>'.$email.'<br><b>Phone Number: </b>'.$phone.'<br><b>Text: </b>'.$text.'<br>';
	}
	$mail->send();


	$mail = new PHPMailer;

	//$mail->SMTPDebug = 0;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'p12ioan12@gmail.com';                 // SMTP username
	$mail->Password = 'p12ioan12';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('p12ioan12@gmail.com', 'Corfu Dream');              // Name is optional
	$mail->addAddress($email=$_POST['email']);
	$mail->isHTML(true);
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mail->Subject = 'email from: '.$firstname.' '.$lastname;
	$mail->Body    = 'We received your email and we will get back to you soon! Thank you!';
	$mail->send();


 ?>
