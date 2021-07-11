<?php
session_start();
if(isset($_SESSION['register']) && $_SESSION['register']=="true"){
	header("location:register.php");
}

$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$otp1=$_SESSION['OTP'];
$name=$_SESSION['NAME'];
$college=$_SESSION['COLLEGE'];
$phone=$_SESSION['PHONE'];

if($otp!=""){
 if($otp == $otp1)
{
	$_SESSION['EMAIL1']=$email;
	$_SESSION['OTP1']=$otp;
	$_SESSION['NAME1']=$name;
	$_SESSION['COLLEGE1']=$college;
	$_SESSION['PHONE1']=$phone;
	echo "yes";
}else{
	echo "not_exist";
}
}
else{
	echo "set";
}
?>