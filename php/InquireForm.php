<?php

error_reporting(-1);
ini_set('display_errors', 'On');

if(isset($_POST['Submit'])) {
  // submitted to server through form

	// build the email message by using
	// info received by the HTML form
	$msg = 'Name: ' .$_POST['first_name'] ."\n".
		'Last Name: ' .$_POST['last_name'] ."\n".
		'Email: ' .$_POST['email'] ."\n".
		'Phone Number: ' .$_POST['phonenumber'] ."\n".
		'Arival Date: ' .$_POST['checkin'] ."\n".
		'Arival Date: ' .$_POST['checkout'] ."\n".
		'Comment: '. "\n" .$_POST['comments'];
		
		$headers = array("From: from@example.com",
			"Reply-To: replyto@example.com",
			"X-Mailer: PHP/" . PHP_VERSION
		);
		$headers = implode("\r\n", $headers);

	// send email using PHP's built in 
	// command, mail()
	mail('pappas.xristos03@gmail.com', 'Inquire for a Villa', $msg, $headers);

	// redirect to the thank you page
	header('location: ../thankyou.php');

	// exit this script - just to make sure nothing else gets run
	exit(0);
} else {
  // do other code block
  header('Location: room.php');
}
?>