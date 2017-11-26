<?php
$link = mysql_connect("46.101.157.57", "redone", "7Zdd31s0");
mysql_select_db('CORFUDREAM');
mysql_query("SET NAMES 'utf8'");

if (isset($_POST['ss'])) {
	$email = $_POST['subscribe'];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

	// mysql inserting a new row
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER SET 'utf8'");
	$result = mysql_query("INSERT INTO SUBSCRIBE (EMAIL) VALUES('$email')");
	echo $email;
	echo '<br>Subscribe done!';
	} else {
		echo "Please enter a valid email...";
	}
}
   ?>
