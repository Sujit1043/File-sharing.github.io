<?php
session_start();
require("connection.php");
$fn = $_REQUEST['file'];
$fs = $_REQUEST['size'];

$em = $_SESSION['mail'];
$st = 'Key Request';

$q = "insert into authority(file_name,request,size,status) values('$fn','$em','$fs','$st')";
$r = mysqli_query($con,$q);
if($r)
{
	echo "<script>alert('Key Request Send to Manager');window.location.href='requestpm.php';</script>";
	
}


?>