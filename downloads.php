<?php
session_start();
require("connection.php");

$key = $_REQUEST['key'];
$trust = $_REQUEST['trust'];
$fname = $_REQUEST['fname'];
$mail = $_REQUEST['mail'];

//echo $key.$trust.$fname.$mail;

$q = "SELECT distinct * FROM `files`,`trustee` where files.file_name='$fname' AND request='$mail' AND skey='$key' AND files.file_name = trustee.file_name";
$r = mysqli_query($con,$q);
if($d = mysqli_fetch_assoc($r))
{
	$t = $d['trust'];
	$data = $d['file_name'];
	
	if($t=="Issued")
	{
		$q1 = "insert into f_download (file_name, down)values('$fname','$mail')";
		$r = mysqli_query($con,$q1);
		if($r)
		{
			header ("Content-Disposition: attachment; filename=".$data);
			readfile("upload\\$file");
		}
	}
	
	else
	{
		echo "<script>alert('Get_File_secutiry_Request_from_Trustee_to_download')</script>";
	}
}

else
{
	echo "<script>alert('Get_Secret_key_from_authority_to_download')</script>";
}

?>