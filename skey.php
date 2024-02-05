<?php
session_start();
require("connection.php");
$fn = $_SESSION['filename'];
$em = $_SESSION['email'];

$q = "update authority set author='Issued', status2='yes' where file_name='$fn' AND request='$em'";
$r = mysqli_query($con,$q);
if($r)
{
	header("location:filereq.php");
}


?>
