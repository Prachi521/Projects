<?php
session_start();
$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
$ID=$_POST['ID'];
$id11=$_SESSION['id11'];
$sql=mysqli_query($con,"select * from register$id11 where sic='$ID'");
$cou=mysqli_num_rows($sql);
        $Email="email-error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$Email=$row["email"];
    	}
    }
$res=mysqli_query($con,"select * from likes_check$id11 where sic='$ID'");
$count=mysqli_num_rows($res);
if($ID=="")
{
	echo "set";
}
elseif($count>0)
{
	echo "yes";
}
elseif($cou>0)
{
	$otp=rand(11111,99999);
	$html="Your One time verification code is ".$otp;
	$_SESSION['EMAIL']=$Email;
	$_SESSION['OTP']=$otp;
	$_SESSION['ID']=$ID;
	smtp_mailer1($Email,'OTP Verification',$html);
	echo "not_exist";
}
else{
    	echo "error";
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