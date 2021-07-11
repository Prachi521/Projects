<?php
session_start();
$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
$password=$_POST['password'];
$conf_password=$_POST['conf_password'];
$id11=$_SESSION['id11'];
$id10 = explode("_",$id11); 
$id12 = $id10[0];
$email=$_SESSION['EMAIL1'];


 $sql=mysqli_query($con,"select * from register where id='$id12'");
        $email1="email-error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$email1=$row["email"];
    	}
    }
     $sql=mysqli_query($con,"select * from register$id11 where email ='$email'");
        $name="name-error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$name=$row["name"];
    	}
    }

if(($password!="" || $conf_password!="")|| ($password!="" && $conf_password!=""))
{
if($password == $conf_password){
	$sql=mysqli_query($con,"UPDATE register$id11 SET password ='$password' WHERE email ='$email'");
	$html="Dear ".$name.",<br>Your password reset request is successful.<br><br> User Name: ".$email."<br>Password: ".$password."<br><br><br><br><br>Thanks,<br>Econtest Portal";
	$_SESSION['EMAIL']=$email;
	smtp_mailer1($email,'Your password reset request is successful!!',$html);
	echo "yes";
}
else{
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
$con->close();
?>