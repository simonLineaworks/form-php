<?php 

	$errors=[]; // Array for errors

	// check if name's field isn t empty
	if (!array_key_exists('name', $_POST) | $_POST['name'] == ''){
		$errors['name'] = "You have to fill your name"; // Message in case of name error
	}
	// check if email's field isn t empty and if it's a valid mail type
	if (!array_key_exists('email', $_POST) | $_POST['email'] == '' | !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "You have to fill a valid email"; // Message in case of email error
	}
	// check if there is a message in this field.
	if (!array_key_exists('message', $_POST) | $_POST['message'] == ''){
		$errors['message'] = "You have to write your message"; // Message in case of message error
	}
	// starting a session 
	session_start();

	if (!empty($errors)){
		$_SESSION['errors'] = $errors; 
		$_SESSION['inputs'] = $_POST;
		header('Location: index.php'); // if errors, redirect to this page
	}else{
		$_SESSION['success'] = 1;
		$message = $_POST['message']; // client message
		$sender = $_POST['email']; // client mail adress
		$headers = 'FROM: siteName'; // receive message header
		mail($sender,'Contact Form', 'Thank you', $headers); // actual message is 'Thank you'
		mail('test@gmail.com','Contact Form', $message, $headers); // Here put your mail adress to receive the message from the form
		header('Location: index.php'); // if success redirect to this page
	}

?>

