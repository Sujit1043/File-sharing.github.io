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
		<!-- partial:index.partial.html -->
<?php
	include("connection.php");
	if(isset($_REQUEST['login']))
	{
		$n = $_REQUEST['login_user'];
		//echo $n;
		$u = $_REQUEST['login_name'];
		//echo $u;
		$e = $_REQUEST['login_email'];
		//echo $e;
		$ph = $_REQUEST['login_phone'];
		//echo $ph;
		$pa = $_REQUEST['login_password'];
		//echo $pa;
		$q = "insert into register(username,name,password,mail,phoneno)
		values('$n','$u','$pa','$e','$ph')";
		$r = mysqli_query($con,$q);
		if($r)
		{
			echo "<script>alert('User Register Success!')</script>";
		}
		else
		{
			echo mysqli_error($con);
		}
	}
	?>
		
		<div class="cont">
			<div class="demo" style="height:700px">
				<!-- Login Form -->
				<div class="login">
					<form method="post" id="login-form">
						
						<h3 style="color:white;text-align:center;font-size:30px">Employee Registration</h3>
						<img src="img/Evolves.png" class="logo-img" width="200"> 
						<div class="login__form">
						<div class="login__row">
								<svg class="login__icon name svg-icon" viewBox="0 0 20 20">
									<path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
								</svg>
								<input autofocus required type="text" name="login_user" class="login__input name" placeholder="Username"/>
							</div>
							<div class="login__row">
								<svg class="login__icon name svg-icon" viewBox="0 0 20 20">
									<path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
								</svg>
								<input autofocus required type="text" name="login_name" class="login__input name" placeholder="Name"/>
							</div>
							<div class="login__row">
								<svg class="login__icon name svg-icon" viewBox="0 0 20 20">
									<path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
								</svg>
								<input autofocus required type="email" name="login_email" class="login__input name" placeholder="Email"/>
							</div>
							<div class="login__row">
								<svg class="login__icon name svg-icon" viewBox="0 0 20 20">
									<path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
								</svg>
								<input autofocus required type="text" name="login_phone" class="login__input name" placeholder="Phone Number"/>
							</div>
							<div class="login__row">
								<svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
									<path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
								</svg>
								<input required type="password" name="login_password" class="login__input pass" placeholder="Password"/>
							</div>
							<button type="submit" name="login" id="login" class="login__submit">Sign Up</button>
							<p class="login__signup">New User? Register here. &nbsp;<a id="signup-link" href="register.php">Sign up</a></p>
						</div>
					</form>
				</div>
				<!-- MFA Verify -->
				<!-- MFA Register -->
				
		<!-- partial -->
		
	</body>
</html>