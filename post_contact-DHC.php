<?php 

	$errors=[];
	if (!array_key_exists('name', $_POST) | $_POST['name'] == ''){
		$errors['name'] = "You have to fill your name";
	}
	if (!array_key_exists('email', $_POST) | $_POST['email'] == '' | !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "You have to fill a valid email";
	}
	if (!array_key_exists('comment', $_POST) | $_POST['comment'] == ''){
		$errors['comment'] = "You have to write your comment";
	}
	session_start();
	if (!empty($errors)){
		$_SESSION['errors'] = $errors;
		$_SESSION['inputs'] = $_POST;
		header('Location: contact-DHC.php');
	}else{
		$_SESSION['success'] = 1;
		$message = $_POST['message'];
		$headers = 'FROM: siteName';
		mail('site@site.com','Contact Form', $message, $headers);
		header('Location: contact-DHC.php');
	}

?>

