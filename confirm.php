<?php session_start(); ?>

<body>

	<form method="POST" action="validation">
		<div class="verification">
			<p>Name : <?=  $_SESSION['verif']['name'] ?></p>
			<p>Email : <?=  $_SESSION['verif']['email'] ?></p>
			<p>Message : <?=  $_SESSION['verif']['message'] ?></p>
		</div>

		<button type="submit">Send</button>

	</form>

</body>

