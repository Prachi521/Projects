<?php
session_start();
if(isset($_SESSION['registers']) && $_SESSION['registers']=="true"){
	header("location:login.php");
}

$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$otp1=$_SESSION['OTP'];

if($otp!=""){
 if($otp == $otp1)
{
	$_SESSION['EMAIL1']=$email;
	$_SESSION['OTP1']=$otp;
	echo "yes";
}else{
	echo "not_exist";
}
}
else{
	echo "set";
}

?>