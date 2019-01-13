<?php 
session_start(); 
if (!isset($_SESSION['user_uuid'])) {
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
			<a href="#" onclick="logout()">Logout&nbsp;<i class="fas fa-sign-out-alt"></i></a>
		</div>
	</header>	
	<div class="flex-box">
		<div class="box-1">
			<div class="messenger">
				<div class="heading"><i class="fab fa-facebook-messenger"></i>&nbsp;<span>Messenger</span></div>
				<div class="users">
				
					<!-- Dynamic Users -->	
			   <!-- <div class="user">
						<div class="user-image"></div>
						<div class="user-details">
							<span><strong>Rizwan Khan</strong></span>
							<span>Last Login</span>
						</div>
					</div> -->
					<!-- Dynamic users End -->

				</div>	
			</div>
		</div>
		<div class="box-2">
			<div class="chat-container">
				<div class="heading"><i class="fas fa-user"></i>&nbsp;<span class="name"></span></div>
				<div class="messages">
					<div class="chats">
						<div class="message-container">
							

							<!-- <div class="message-block">
								<div class="user-icon"></div>
								<div class="message">Hi, Govardhan hhow are you..?</div>
							</div>
							<div class="message-block received-message" style="">
								<div class="user-icon"></div>
								<div class="message">Hi, Govardhan hhow are you..?</div>
							</div> -->
						

						</div>
					</div>
					<div class="write-message">
						<div class="message-area"> 
							<textarea class="message-input" placeholder="Type a message"></textarea>
							<button class="send-btn"><i class="fab fa-telegram-plane"></i>&nbsp;Send</button>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
	</div>
</div>

	<script type="text/javascript" src="js/firestore-config.js"></script>
	<script type="text/javascript" src="js/chat.js">

		

	


	</script>


</body>
</html>