<?php
session_start();
if(isset($_SESSION['register']) && $_SESSION['register']=="true"){
	header("location:register.php");
}

$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
$password=$_POST['password'];
$conf_password=$_POST['conf_password'];
$email=$_SESSION['EMAIL1'];
$_SESSION['email']=$email;
$otp=$_SESSION['OTP1'];
$name=$_SESSION['NAME1'];
$college=$_SESSION['COLLEGE1'];
$phone=$_SESSION['PHONE1'];
$email1="thethirdeyesitwest@gmail.com";


if(($password!="" || $conf_password!="")|| ($password!="" && $conf_password!=""))
{
if($password == $conf_password){
	$sql=mysqli_query($con,"INSERT INTO register (name, email, phone_no, college, password, otp) VALUES ('$name', '$email', '$phone', '$college', '$password', '$otp')");
	$html="Dear ".$name.",<br>Thank you for registering your college in econtest portal. <br><br> User Name: ".$email."<br>Password: ".$password."<br><br><br><br><br>Thanks,<br>Econtest Portal";
	$html1="New user has registered on econtest portal with the following details:<br><br> <br>Name: ".$name."<br>College: ".$college."<br>Email: ".$email."<br>Phone No: ".$phone;
	$_SESSION['EMAIL']=$email;
	smtp_mailer1($email,'Thank you for registering in econtest portal',$html);
	smtp_mailer2($email1,$college.' has registered on econtest portal.',$html1);
	
		$sql=mysqli_query($con,"select * from register where email='$email'");
    $id='0';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$id=$row["id"];
	}
}
 
$file = '../files0';
$newfile = '../files'.$id;


 recurse_copy($file,$newfile);
	echo "yes";
}
else{
	echo "not_exist";
}
}
else{
	echo "set";
}


function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
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