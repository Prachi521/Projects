<?php
session_start();
if(isset($_SESSION['registers']) && $_SESSION['registers']=="true"){
	header("location:login.php");
}

$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
$password=$_POST['password'];
$conf_password=$_POST['conf_password'];
$email=$_SESSION['EMAIL1'];
$otp=$_SESSION['OTP1'];
$email1="thethirdeyesitwest@gmail.com";
$sql=mysqli_query($con,"select * from register where email='$email'");
$name='sample-name';
if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$name=$row["name"];
	}
}

if(($password!="" || $conf_password!="")|| ($password!="" && $conf_password!=""))
{
if($password == $conf_password){
	
	$sql=mysqli_query($con,"update register set password='$password' otp='$otp' where email='$email'");
	$html="Dear ".$name.",<br>Your password is successfully reset. <br><br> User Name: ".$email."<br>Password: ".$password."<br><br><br><br><br>Thanks,<br>The Third Eye Team, Sambalpur";
	$html1="Password reset request is successfully for the user with the following details:<br><br>Name: ".$name."<br>Email: ".$email;
	$_SESSION['EMAIL']=$email;
	smtp_mailer1($email,'Your password reset request is successful',$html);
	smtp_mailer2($email1,'Password reset request is successful for '.$name,$html1);
	$_SESSION['passs']="true";
	echo "yes";
}
else{
	echo "not_exist";
}
}
else{
	echo "set";
}


function smtp_mailer2($to,$subject, $msg){
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
	}else{
	}
}
?>