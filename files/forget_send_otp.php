<?php
session_start();
if(isset($_SESSION['registers']) && $_SESSION['registers']=="true"){
	header("location:login.php");
}

$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
$email=$_POST['email'];

$res=mysqli_query($con,"select * from register where email='$email'");
$count=mysqli_num_rows($res);
if($email=="")
{
	echo "set";
}
elseif($count>0)
{
	$otp=rand(11111,99999);
	$html="Your otp verification code for reset password is ".$otp;
	$_SESSION['EMAIL']=$email;
	$_SESSION['OTP']=$otp;
	smtp_mailer1($email,'OTP Verification',$html);
	echo "yes";
}
else
{
	
	echo "not_exist";
}
function smtp_mailer1($to,$subject, $msg){
	require_once("smtp/class.phpmailer.php");
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587 
	$mail->IsHTML(true);
	$mail->Username = "econtestportal@gmail.com";
	$mail->Password = "Econtest@121";
	$mail->SetFrom("econtestportal@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
		if(!$mail->Send()){
		echo "Mailer Error: " . $mail->ErrorInfo;
	}else{
		echo "Message has been sent";
	}
}
?>