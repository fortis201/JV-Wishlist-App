
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login to JV's Wishlist</title>
	<!-- my stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/stylesheet.css') ?>">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/node_modules/bootstrap/dist/css/bootstrap.min.css') ?>" type="text/css" />
	<script src="<?= base_url('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<!-- js and jquery -->
	<script src="<?= base_url('assets/node_modules/jquery/dist/jquery.min.js') ?>"></script>
</head>
<body>
	<div class="container">
		<h1>Register or Login to JV's Wishlist App!</h1>
		<div class="inline">			
			<form id="reg" class=" col-md-4" action="/users/create" method="post">
				<h2>Register</h2>
				<ul class="loginAndReg inline">
					<li>
						<p>First Name</p>
					</li>
					<li>
						<p>Last Name</p>
					</li>
					<li>
						<p>Username</p>
					</li>
					<li>
						<p>Email Address</p>
					</li>
					<li>
						<p>Password</p>
					</li>
					<li>
						<p>Confirm Password</p>
					</li>
				</ul>

				<ul class="loginAndReg inline">
					<li>
						<input class="login_input" type="text" name="first_name">
					</li>
					<li>
						<input class="login_input" type="text" name="last_name">
					</li>
					<li>
						<input class="login_input" type="text" name="username">
					</li>
					<li>
						<input class="login_input" type="text" name="email">
					</li>
					<li>
						<input class="login_input" type="password" name="password">
					</li>
					<li>
						<input class="login_input" type="password" name="confirm_password">
					</li>
					<li>
						<input class="btn btn-info" type="submit" value="Register">
					</li>
				</ul>
			</form>
			<?php
			if($this->session->flashdata('errors')) {

				// make error messages appear as red text

				echo $this->session->flashdata('errors');
			}
			?>
		</div>
		<div class="inline">
			<form id="login" class="col-md-4 col-md-offset-1" action="/users/login" method="post">
				<h2>Login</h2>
				<ul class="loginAndReg inline">
					<li>
						<label for="username">Username</label>
					</li>
					<li>
						<label for="password">Password</label>
					</li>
				</ul>
				
				<ul class="loginAndReg inline">
					<li>
						<input type="text" name="username">
					</li>
					<li>
						<input type="password" name="password">
					</li>
					<li>
						<input class="btn btn-info" type="submit" value="Login">
					</li>
				</ul>	
			</form>
		</div>
	</div>
</body>
</html>