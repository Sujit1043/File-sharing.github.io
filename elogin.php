<?php
session_start();
  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
  
$mail = new PHPMailer(true);
  


	include("connection.php");
	if(isset($_REQUEST['login']))
	{
		$e = $_REQUEST['login_email'];
		$p = $_REQUEST['login_password'];
		$q = "select * from register where mail='$e' and password='$p'";
		$r = mysqli_query($con,$q);
		if($d=mysqli_fetch_assoc($r))
		{
			echo "<script>alert('OTP Send in your Email')</script>";
			header("location:otppage.php");
			$na = $d['name'];
			$_SESSION['mail']=$e;
			$_SESSION['name']=$na;
			
			
			$str = "1234567890";
			$a = str_shuffle($str);
			$b = substr($a,0,4);
			//echo $b;
			$q1 = "update register set one_key='$b' where mail='$e'";
			$r1 = mysqli_query($con,$q1);
			
try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'techcitiforyou@gmail.com';                 
    $mail->Password   = 'techcititech@1234';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('techcitiforyou@gmail.com', 'TechCiti');           
    $mail->addAddress($e);
   // $mail->addAddress('techcitikeerthi@gmail.com', 'Keerthi	');
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'One Time Password';
    $mail->Body    = 'Your One Time Password <b>'.$b.'</b> ';
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
  
		}
		
		
	}
	?>
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
								<input autofocus required type="email" name="login_email" class="login__input name" placeholder="Email"/>
							</div>
							<div class="login__row">
								<svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
									<path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
								</svg>
								<input required type="password" name="login_password" class="login__input pass" placeholder="Password"/>
							</div>
							<button type="submit" name="login" id="login" class="login__submit">Log in</button>
							<p class="login__signup">New User? Register here. &nbsp;<a id="signup-link" href="register.php">Sign up</a></p>
						</div>
					</form>
				</div>
				<!-- MFA Verify -->
				<!-- MFA Register -->
				
		<!-- partial -->
		
	</body>
</html>