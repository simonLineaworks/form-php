<?php session_start(); ?>

<body>
	
	<div id="page-contact">
				
		<p class="titlepage"> Contact </p>

		<?php if(array_key_exists('errors', $_SESSION)): ?>
			<div class="alert alert-danger">
				<?= implode ('<br>', $_SESSION['errors']); ?>
			</div>
		<?php  endif; ?>

		<?php if(array_key_exists('success', $_SESSION)): ?>
			<div class="alert alert-success">
				Mail sent!
			</div>
		<?php  endif; ?>
		
		<form action="post_contact-DHC" method="POST">
			<div>
				<label for="inputname">Your name : </label>
				<input type="text" name="name" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : '';	?>">
			</div>

			<div>
				<label for="inputemail">Your mail : </label>
				<input type="text" name="email" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '';	?>">
			</div>

			<div>
				<label for="inputmessage">Your message : </label>
				<textarea name="message" id="inputmessage" cols="30" rows="5" > <?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';	?> </textarea>
			</div>

			<button type="submit">Send</button>

		</form>	
			
	</div>

</body>

<?php 
	
	unset($_SESSION['inputs']);
	unset($_SESSION['success']);
	unset($_SESSION['errors']);

?>