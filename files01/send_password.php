<?php
session_start();
$id11=$_SESSION['id11'];
if(isset($_SESSION['register']) && $_SESSION['register']=="true"){
	header("location:register.php");
}

$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
$password=$_POST['password'];
$conf_password=$_POST['conf_password'];
$email=$_SESSION['EMAIL1'];
$otp=$_SESSION['OTP1'];
$name=$_SESSION['NAME1'];
$college=$_SESSION['COLLEGE1'];
$phone=$_SESSION['PHONE1'];
$email1="thethirdeyesitwest@gmail.com";


if(($password!="" || $conf_password!="")|| ($password!="" && $conf_password!=""))
{
if($password == $conf_password){
	$sql=mysqli_query($con,"INSERT INTO register$id11 (name, email, phone_no, college, password, otp) VALUES ('$name', '$email', '$phone', '$college', '$password', '$otp')");
	$html="Dear ".$name.",<br>Thank you for registering with The Third Eye. <br><br> User Name: ".$email."<br>Password: ".$password."<br><br><br><br><br>Thanks,<br>The Third Eye Team, Sambalpur";
	$html1="New user has registered to your online platform The Third Eye with the following details:<br><br> <br>Name: ".$name."<br>Email: ".$email."<br>Phone No: ".$phone;
	$_SESSION['EMAIL']=$email;
	smtp_mailer1($email,'Thank you for registering with The Third Eye',$html);
	smtp_mailer2($email1,$name.' registered on your online platform.',$html1);
	$_SESSION['pass']="true";
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