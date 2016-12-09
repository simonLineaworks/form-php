<?php session_start();

		$message = $_SESSION['verif']['message']; 
		$sender = $_SESSION['verif']['email']; 

		$headers = 'FROM: DHC';
		
		mail($sender,'Contact Form', 'Thank you', $headers); // actual message is 'Thank you'
		mail('DHC@dhc.com', 'Contact Form', $message, $headers); // Here put your mail adress to receive the message from the form
		header('Location: thanks.html'); 

 ?>