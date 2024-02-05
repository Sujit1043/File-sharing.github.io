
<html>
<head>
    <title>upload image to firebase</title>
	<style>
form{
margin-right:100px;
}
#submit{
height: 30px;
width: 220px;
font-size: 14px;
}
</style>
</head>
<body style="background-image:url(img/bg.jpg); height:500px; width:100%">
<header id="header" id="home">
			<div class="container main-menu">
				<div class="row align-items-center justify-content-between d-flex">
					
					<!-- #nav-menu-container -->
					<div>
						<a class="genric-btn primary circle" href="cloudupload.php" style="padding:20px;background-color:black;color:white;">Cloud Upload</a>
						<a class="genric-btn primary circle" href="clouddownload.php" style="padding:20px;background-color:black;color:white;">Cloud Download</a>
						<a class="genric-btn primary circle" href="mlogin.php" style="padding:20px;background-color:black;color:white;">Logout</a>
						
					</div>
				</div>
			</div>
		</header>
		
<form id="form1" method="post" action="" enctype="multipart/form-data" name="">
<center>
<img src="img/cloud-encryption-software.png" width="300px" height="300px">
<div id="container_big" style="color:white">
<br><br>
<center>
    <form enctype="multipart/form-data">
        <label>select file : </label>
        <input type="file" id="fname" name="fname"><br><br>
        <button type="button" onclick="upload()">Upload</button>
    </form>
</center>
</div>





<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyDDSrRduj0NgTQ9O9QCfUkNJ0KSSQt0leE",
    authDomain: "data-sharing-8f32d.firebaseapp.com",
    databaseURL: "https://data-sharing-8f32d.firebaseio.com",
    projectId: "data-sharing-8f32d",
    storageBucket: "data-sharing-8f32d.appspot.com",
    messagingSenderId: "1088251263448",
    appId: "1:1088251263448:web:b30293bd55525c06a81aad"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script type="text/javascript" src="js/uploadimage.js"></script>
</body>
</html>