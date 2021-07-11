<?php
session_start();
$id11=$_SESSION['id11'];
if(isset($_SESSION['registe']) && $_SESSION['registe']=="true"){
	header("location:view.php");
}

$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
$id=$_SESSION['ID'];
$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$otp1=$_SESSION['OTP'];

if($otp!=""){
 if($otp == $otp1)
{
	
	$sql=mysqli_query($con,"select * from users$id11 where id='$id'");
    $like='0';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$like=$row["likes"];
	}
}
	 	$sql=mysqli_query($con,"select * from users$id11 where id='$id'");
    $name="jassi";
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$name=$row["name"];
	}
}
	 $like=$like+1;
	 $res=mysqli_query($con,"select * from users$id11 where id='$id'");
	 $count=mysqli_num_rows($res);
	 if($count>0){
	mysqli_query($con,"INSERT INTO likes_check$id11 (email, liked_id) VALUES ('$email', '$id')");
	mysqli_query($con,"update users$id11 set likes='$like' where id='$id'");
    $html="You have successfully liked ".$name."'s drawing.<br><br><br><br><br><br><br>Thanks,<br>The Third Eye Team, Sambalpur";
	smtp_mailer1($email,'Thanks for casting your vote',$html);
	
}
	 else{
		 
	 }
	 
	echo "yes";
}else{
	echo "not_exist";
}
}
else{
	echo "set";
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