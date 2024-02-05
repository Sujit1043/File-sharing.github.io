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
	require("connection.php");
		if(isset($_REQUEST['sub']))
		{
			$fn = $_FILES['fname']['name'];
			$fs = $_FILES['fname']['size'];
			$tm = $_FILES['fname']['tmp_name'];
			$q = "insert into files(file_name,size) values('$fn','$fs')";
			$r = mysqli_query($con,$q);
			if($r)
			{
				move_uploaded_file($tm,'upload/'.$fn);
				echo "<script>alert('File Upload Success')</script>";
			}
			else
			{
				echo mysqli_error($con);
			}
			
			$sha1file = sha1_file("upload/".$fn);
			$fp = fopen('encrypt/'.$fn, 'a');//opens file in append mode
			fwrite($fp,$sha1file);  
			fclose($fp); 
		}
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
						<a class="genric-btn primary circle" href="managerhome.php">User Details</a>
						<a class="genric-btn primary circle" href="fileupload.php">File Upload</a>
						<a class="genric-btn primary circle" href="fileview.php">View File</a>
						<a class="genric-btn primary circle" href="filereq.php">File Request</a>
						<a class="genric-btn primary circle" href="empfiledown.php">Employee Downloads</a>
	
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
							Manager Home Page
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
						<h1>File Upload</h1>
						<br>
						<table border="2" cellspacing="10" cellpadding="10">
						<form action="" method="post" enctype="multipart/form-data">
					Select File <input type="file" name="fname" id="fname">
					<br><br>
					<input type="submit" name="sub" value="Upload" onclick="upload();">
					</form>
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
