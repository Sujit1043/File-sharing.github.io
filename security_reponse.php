<?php
require("connection.php");
$fn = $_REQUEST['file'];
$em = $_REQUEST['mail'];

$q = "update trustee set trust='Issued', status1='yes' where file_name='$fn' AND request='$em'";
$r = mysqli_query($con,$q);
if($r)
{
	echo "<script>alert('Request Issued Successfully!');window.location.href='filereqtl.php';</script>";
	
}

?>