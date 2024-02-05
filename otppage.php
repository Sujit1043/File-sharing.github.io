<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Evolves</title>
		<link rel="icon" href="img/favicon.png" type="image/png">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
		<link rel="stylesheet" href="css/style.css">
		<style>
			#scan_code {
			background-color: #3CBC8D;
			width:50%;
			text-align:center;
			font-size:20px;
			padding-right:15px;
			margin-left:25%;
			border-radius: 4px;
			}
			#scan_code:focus {
			background-color: #5DDCAD;
			}
			#verify_code{
			width:70%;
			left:15%;
			}
			.logo-img{
			border-radius: 100px;
			margin: 50px;
			}
			#signup-form{
			display:none;
			}
			.signup{
			top:6%;
			}
		</style>
	</head>
	<body>
	<?php
	session_start();
	$e = $_SESSION['mail'];
	require("connection.php");
	if(isset($_REQUEST['login']))
	{
		$otp = $_REQUEST['otp'];
	$q = "select * from register where mail='$e' and one_key='$otp'";
	$r = mysqli_query($con,$q);
	if($d=mysqli_fetch_assoc($r))
	{
		header("location:emphome.php");
	}
	else
	{
		echo "<script>alert('Please Enter Correct OTP')</script>";
	}
	}
	?>
		<!-- partial:index.partial.html -->
		<div id="session" style="display: none;"><?php echo !empty($_SESSION['user_id']) ?></div>
		<div id="newr" style="display: none;"><?php echo !empty($_SESSION['gauth']) ?></div>
		<div class="cont">
			<div class="demo">
				<!-- Login Form -->
				<div class="login">
					<form method="post" id="login-form">
						<input type="hidden" id="process_name" name="process_name" value="user_login" />
						<h3 style="color:white;text-align:center;font-size:30px">Employee Login</h3>
						<img src="img/Evolves.png" class="logo-img" width=200> 
						<div class="login__form">
							<div class="login__row">
								<svg class="login__icon name svg-icon" viewBox="0 0 20 20">
									<path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
								</svg>
								<input autofocus required type="text" name="otp" class="login__input name" placeholder="Enter OTP"/>
							</div>
							<button type="submit" name="login" id="login" class="login__submit">Verify</button>
							
						</div>
					</form>
				</div>
				<!-- MFA Verify -->
				<!-- MFA Register -->
				
		<!-- partial -->
		
	</body>
</html>