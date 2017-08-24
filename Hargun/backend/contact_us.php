<?php
	date_default_timezone_set("Asia/Calcutta");

	function validate($post)
	{
		if (!isset($post["name"])) {
			return false;
		}
		elseif (!isset($post["email"])) {
			return false;
		}
		elseif (!isset($post["subject"])) {
			return false;
		}
		elseif (!isset($post["message"])) {
			return false;
		}
		else{
			return true;
		}
	}
	
	$validated = validate($_POST);

	if ($validated) {
		// send mail
		$timestamp = date("Y-m-d G:i:s");
		$headers = "From: mail@hargunindustries.in";
		// $to = "mail@hargunindustries.in";
		$to = "mail@hargunindustries.in";
		$subject = "Query from Contact Us on hargunindustries.in";
		$message = "Name: {$_POST['name']}\r\nEmail ID: {$_POST['email']}\r\nTimestamp: {$timestamp}\r\n\r\nSubject: {$_POST['subject']}\r\nMessage: {$_POST['message']}";
		mail($to, $subject, $message, $headers);
		echo 'success';
	}
	else {
		echo 'incomplete';
	}

?>