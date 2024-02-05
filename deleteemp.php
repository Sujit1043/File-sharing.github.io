<?php
require("connection.php");
$e = $_REQUEST['mail'];
$q = "delete from register where mail='$e'";
$r = mysqli_query($con,$q);
if($r)
{
	header("location:managerhome.php");
}

?>