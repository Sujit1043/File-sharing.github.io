<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';
  
$mail = new PHPMailer(true);

require("connection.php");
$fn = $_REQUEST['file'];
$em = $_REQUEST['mail'];

$_SESSION['filename']=$fn;
$_SESSION['email']=$em;

$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*";
$a = str_shuffle($str);
$b = substr($a,0,12);
//echo $b;

$q = "update files set skey = '$b' where  file_name='$fn'";
$r = mysqli_query($con,$q);
if($r)
{
	try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'techcitiforyou@gmail.com';                 
    $mail->Password   = 'techcititech@1234';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('techcitiforyou@gmail.com', 'TechCiti');           
    $mail->addAddress($em);
    //$mail->addAddress('techcitikeerthi@gmail.com', 'Keerthi	');
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'Secret Key';
    $mail->Body    = 'Your File Secret Key <b>'.$b.'</b> ';
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

	header("location:skey.php?msg=Success");
}
?>
