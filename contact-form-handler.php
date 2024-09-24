<?php

	if (isset($_POST['submit'])) {
		 $name = $_POST['name'];
		 $visitor_email = $_POST['email'];
 		$mailFrom = $_POST['mail'];
		$message = $_POST['message'];
		
		$mailTo = "megancampbell3@icloud.com";
		$headers = "From: ".$mailFrom;
		$txt = "You have recieved an email from ".$name.".\n\n".$message;
		
		mail($mailTo, $subject, $txt, $headers);
		header("Location; index.php?mailsend");
	}

?>