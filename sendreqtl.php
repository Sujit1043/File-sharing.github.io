<?php
session_start();
require("connection.php");
$fn = $_REQUEST['file'];
$fs = $_REQUEST['size'];

$em = $_SESSION['mail'];
$st = 'Request';

$q = "insert into trustee(file_name,request,size,status) values('$fn','$em','$fs','$st')";
$r = mysqli_query($con,$q);
if($r)
{
	echo "<script>alert('Request Send to TL');window.location.href='requesttl.php';</script>";
	
}


?>