<?php
session_start();

if (isset($_SESSION['user_uuid'])) {
	header("location:chat.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Firebase App is always required and must be first -->
	<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-app.js"></script>
	<!-- Add additional services that you want to use -->
	<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-firestore.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<div class="main-wrapper">

		<header class="header">
			<div class="logo">
				<a href="#">My Messenger</a>
			</div>
			<div class="menu">
				<a href="#" class="login-register-btn">
					<span class="active">Register&nbsp;<i class="fas fa-user"></i></span>
					<span class="">Login&nbsp;<i class="fas fa-user"></i></span>
				</a>
			</div>
		</header>
		<div class="card">
			<div class="content active">
				<h2>Login</h2>
				<form id="login-form" onsubmit="return false">
					<div class="form-input" >
						<input type="text" name="username" placeholder="Username" autocomplete="off">
					</div>
					<div class="form-input">
						<input type="password" name="password" placeholder="Password" autocomplete="off">
					</div>
					<input type="hidden" name="login_user" value="1">
					<div class="form-input">
						<button id="login-btn">Login</button>
					</div>
				</form>
				
			</div>
			<div class="content">
				<h2>Register</h2>
				<form id="register-form" onsubmit="return false">
					<div class="form-input">
						<input type="text" name="fullname" placeholder="Full Name">
					</div>
					<div class="form-input">
						<input type="text" name="username" placeholder="Username">
					</div>
					<div class="form-input">
						<input type="email" name="email" placeholder="Email">
					</div>
					<div class="form-input">
						<input type="password" name="password" placeholder="Password">
					</div>
					<input type="hidden" name="register_user" value="1">
					<div class="form-input">
						<button id="register-btn">Register</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>
	

	
	<script type="text/javascript" src="js/firestore-config.js"></script>
	<script type="text/javascript" src="js/main.js"></script>



</body>
</html>