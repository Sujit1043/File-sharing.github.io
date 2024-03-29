<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/favicon.png">
		<!-- Author Meta -->
		<meta name="author" content="Evolves-Team">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Evolves</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
			CSS
			============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	
	<body>
	<?php
	session_start();
	$em = $_SESSION['mail'];
	?>
		<header id="header" id="home">
			<div class="container main-menu">
				<div class="row align-items-center justify-content-between d-flex">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li class="menu-active"><a href="#home">Home</a></li>
				
						</ul>
					</nav>
					<!-- #nav-menu-container -->
					<div>
						<a class="genric-btn primary circle" href="emphome.php">Profile</a>
						<a class="genric-btn primary circle" href="requesttl.php">Request to TL</a>
						<a class="genric-btn primary circle" href="requestpm.php">Request to Manager</a>
						<a class="genric-btn primary circle" href="filedown.php">File Download</a>
						<a class="genric-btn primary circle" href="index.php">Logout</a>
					</div>
				</div>
			</div>
		</header>
		<!-- #header -->
		<!-- start banner Area -->
		<section class="banner-area relative" id="home"
		style="background-image:url('img/cloud-engineer.jpg');background-size:100% ">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-start">
					<div class="banner-content col-lg-8 col-md-12">
						<h1 class="text-uppercase">
							Employee Home Page
						</h1>
						<h3 class="text-white" style="padding-bottom: 20px;">
							We Make Cloud Computing More Easier
						</h3>
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->
		<!-- Start about Area -->
		<section class="about-area" id="about" style="padding-top: 50px; padding-bottom: 75px">
			<div class="container-fluid">
				<div class="row d-flex justify-content-end align-items-center">
					<div class="col-lg-12 col-md-12 about-left">
						<h1>File Details</h1>
						<br>
						<table border="2" cellspacing="10" cellpadding="10">
						<tr><td>File Name</td><td>Size</td><td>Uploaded Date</td>
						<td>Send Request</td></tr>
						
						
					<?php

						require("connection.php");
						$q = "select * from files";
						$r = mysqli_query($con,$q);
						while($d=mysqli_fetch_assoc($r))
						{
							$fn = $d['file_name'];
							$fs = $d['size'];
							echo "<tr>";
							echo "<td>".$d['file_name']."</td>";
							echo "<td>".$d['size']."</td>";
							echo "<td>".$d['date']."</td>";
							echo "<td><a href='sendreqpm.php?file=$fn&size=$fs'>Request Secret Key</a></td></tr>";
							
						}
					
?>					
</table>
					</div>
					
				</div>
			</div>
		</section>
		<!-- End about Area -->
		<!-- start footer Area -->
		<footer class="footer-area">
			<div class="container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Evolves
					</p>
					<div class="footer-social d-flex align-items-center">
						<a href="https://github.com/saksham-johri/Fine-Grained-Two-Factor-Access-Control-for-Web-Based-Cloud-Computing-Services" target="_blank">
						<i class="fa fa-github"></i>
						</a>
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer Area -->
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script src="js/easing.min.js"></script>
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/mail-script.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
