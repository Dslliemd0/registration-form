<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Log In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	</head>
	<body>
		<div id="log-in">
			<div id="content">
				<div id="not-account-desc" class="ext-content">
					<div class="desc-content">
						<h1>Don't have an account?</h1>
						<hr class="separate-line" />
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<button id="swbutton" class="button switch-button" type="submit">Sign Up</button>
					</div>
				</div>
				<div id="form-background">
					<div id="message"></div>
					<form method="post" class="signup" action="register.php">
						<fieldset>
							<legend>Sign Up</legend>
							<div class="logo"></div>
							<hr class="separate-line" />
							
							<div class="input-container">
								<label class="required" for="name">Name</label><br />
								<input type="text" size="15" name="name" required>
								<i class="form-icon user-inactive"></i>
							</div>
							<div class="input-container">
								<label class="required" for="email">Email</label><br />
								<input type="email" size="15" name="email" required>
								<i class="form-icon email-inactive"></i>
							</div>
							<div class="input-container">
								<label class="required" for="psw">Password</label><br />
      							<input type="password" size="15" name="psw" required>
      							<i class="form-icon password-inactive"></i>
      						</div>
	  						<button class="button submit-button" type="submit" name="req_user">Sign Up</button>
  						</fieldset>
					</form>

					<form method="post" class="login" action="register.php">
							<fieldset>
								<legend>Log In</legend>
								<div class="logo"></div>
								<hr class="separate-line" />
								<div><?php echo $error; ?></div>
								<div class="input-container">
									<label class="required" for="email">Email</label><br />
									<input id="email" type="email" size="15" name="email" required>
									<i class="form-icon email-inactive"></i>
								</div>
								<div class="input-container">
									<label class="required" for="psw">Password</label><br />
	      							<input type="password" size="15" name="psw" required>
	      							<i class="form-icon password-inactive"></i>
	      						</div>
		  						<button class="button submit-button" type="submit" name="log_user">Login</button>
		  						<span  class="forgot-button"><a href="#">Forgot?</a></span>
	  						</fieldset>
					</form>

				</div>
				<div id="have-account-desc" class="ext-content">
					<div class="desc-content">
						<h1>Have an account?</h1>
						<hr class="separate-line" />
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<button class="button switch-button" type="submit">Log In</button>
					</div>
				</div>
			</div>
		</div>
		<footer><p>All rights reserved "Magebit"</p></footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/myFx.js"></script>
	</body>
</html>