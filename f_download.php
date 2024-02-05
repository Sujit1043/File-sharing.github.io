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
		<!-- Start about Area 
		<section class="about-area" id="about" style="padding-top: 50px; padding-bottom: 75px">
			<div class="container-fluid">
				<div class="row d-flex justify-content-end align-items-center">
					<div class="col-lg-12 col-md-12 about-left">
						<h1>Two Factor File Access Control</h1>
						<br>
						<table border="2" cellspacing="10" cellpadding="10">
						<tr><td>File Name</td><td>Size</td><td>Uploaded Date</td>
						<td>Send Request</td></tr>
						-->
						
					<?php	
					$fn = $_REQUEST['fname'];
					$em = $_REQUEST['mail'];
					
						require("connection.php");
						$q = "SELECT distinct * FROM `files`,`trustee` where request='$em' AND  files.file_name='$fn' AND files.file_name = trustee.file_name";	
						$r = mysqli_query($con,$q);
						if($d = mysqli_fetch_assoc($r))
						{
							$trust = $d['trust'];
							$key = $d['skey'];
							
							//echo $trust;
							
						}
?>	
<!--				
</table>
					</div>
					
				</div>
			</div>
		</section>
		
	-->

<section id="content"  style="background-color:black">
	<div class="full-width-container block-2">
		<div class="container">
                   <div class="row">
                       <center>
                                <header>
						<h2 style="color:whitesmoke"><span>Two Factor Access Control for File</span></h2>
					</header>
					
                               </center>
			   
			 <div  style="height: 297px; width: 1000px; margin-left: 10px;margin-bottom: -10px;">
                         <div style="width:500px;height: 300px;border-top-left-radius: 19px;border-bottom-left-radius: 19px;float: left;">
	
                             <fieldset style="background-color:lightgrey;border-radius: 9px;height: 350px;margin-top: 10px;">
                                 <br>
          <center>
        <h1 style="font: monospace;font-size: 35px;font-weight: bold;color: darkslateblue">Trustee File Security </h1><br><br><br>
          <form action="" name="form1" method="get" > 
<label style="font-size: 20px;margin-left:30px;">Trustee Status :</label> <br>
<input type="text" id="id"  style="height: 40px; width:250px; " name="key" value="<?php echo $trust ?>" required style="margin-left: 45px;" readonly=""/><br><br>
 
     
  
      
            
		</form>
          </center>
                             </fieldset>
                </div>
                                       <div style="height: 355px; width: 500px;margin-left:600px;">
                                           <fieldset style="background-color:whitesmoke;border-radius: 9px;height: 350px;margin-top: 10px;">
                                 <br>
          <center>
        <h1 style="font: monospace;font-size: 35px;font-weight: bold;color: darkslateblue">File Secret Key </h1><br><br><br>
            <form action="downloads.php" name="form1" method="post" > 
<label style="font-size: 20px;margin-left:30px;">Secret Key :</label> <br>
<input type="text" id="id"  style="height: 40px; width:250px; " name="key"
required style="margin-left: 45px;" placeholder="Enter secret key "/><br><br>
 
     <input type="hidden" value="<?php echo $trust ?>" name="trust" />
                <input type="hidden" value="<?php echo $fn ?>" name="fname" />
      <input type="hidden" value="<?php echo $em ?>" name="mail" />
             
<input type="submit"  value="Download"style="border-radius: 12px;height: 38px;width: 93px;background-color:silver"/>

  
      
            
		</form>
          </center>
                             </fieldset>
 
                                       </div>
                         </div>
                       <br>
                       
                       
                       
				</div>
                   	</div>				</div>
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
