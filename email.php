<html>
	<head>
		<title>Kia Ora</title>
	</head>
	<body>
		<h1>Hello every one</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<hr />
			<h2>Hello Two</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<?php
					if (isset($_POST['sub_email'])){
						$message = $_POST['message'];
						$subj = "email from site";
						$to = "andrewfosteris@gmail.com";
						if (mail($to, $subj, $message)){
							echo "thanks for the email";
						}
						unset($_POST);
					} else {
				?>		

				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<p>Hello</p>
					<textarea name="message"></textarea><br />
					<input type="submit" name="sub_email" value="Send">
				</form>
				<?php
					}
				?>
				<hr />
				<h2>Hi there below email</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</body>
</html>
