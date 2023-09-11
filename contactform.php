<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];

	$mailTo = "artucastro17@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
 	header("Location: index2.html");
}