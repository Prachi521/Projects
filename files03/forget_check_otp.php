<?php
session_start();
$_SESSION['verify']="true";
$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$otp1=$_SESSION['OTP'];
if($otp!=""){
 if($otp == $otp1)
 {
	$_SESSION['EMAIL1']=$email;
	echo "yes";
 }
	else{
		echo "not_exist";
		}
}
else{
	echo "set";
}
?>