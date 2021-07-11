<?php
session_start();
$otp=$_POST['otp'];
$id11=$_SESSION['id11'];
$email1="econtestportal@gmail.com";
$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
    $sql=mysqli_query($con,"select * from register where id='$id11'");
    $email='email-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
	}
}
$sql=mysqli_query($con,"select * from dashboard_url where email='$email' && verification_code !='' ");
    $verification='verification_code-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$verification=$row["verification_code"];
	}
}
$sql=mysqli_query($con,"select * from dashboard_url where email='$email' && verification_code !='' ");
    $competition='competition-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$competition=$row["competition"];
	}
}
$sql=mysqli_query($con,"select * from dashboard_url where email='$email' && verification_code !='' ");
    $url='url-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$url=$row["url"];
	}
}
$sql=mysqli_query($con,"select * from register where id='$id11'");
    $name='name-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$name=$row["name"];
	}
}
	$sql=mysqli_query($con,"select * from register where id='$id11'");
    $college='college-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$college=$row["college"];
	}
}
	
	$sql=mysqli_query($con,"select * from dashboard_url where email='$email' && verification_code !='' ");
    $value='value-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$value=$row["value"];
	}
}
$version="Premium";
if($otp!=""){
 if($otp == $verification)
{
   
	if($competition == "Article")
	{
	 $sql=mysqli_query($con,"UPDATE dashboard_url SET status='1' WHERE value='$value'");
	$html="Dear ".$name.",<br>Your request for the ".$version." version is successful. As per your Request the ".$competition." competition platform is successfully created for ".$college.".<br><br> Shareable URL: ".$url."<br><br><br><br><br>Thanks,<br>The E-contest Portal";
	$html1=" ".$college." has hosted the ".$competition." competition with the following details:<br><br> <br>College Name: ".$college."<br>Shareable URL: ".$url;
	smtp_mailer1($email,'Thank you for hosting '.$competition.' competition with E-contest Portal',$html);
	smtp_mailer2($email1,$college.' has hosted the '.$competition.' competition.',$html1);
	
$ID=$id11."_".$value;
	$sql=mysqli_query($con,"CREATE TABLE `register$ID` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sic` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");


	$sql=mysqli_query($con,"ALTER TABLE `register$ID`
  ADD UNIQUE KEY `sic` (`sic`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`) USING BTREE");

	
  
  	$sql=mysqli_query($con,"CREATE TABLE `users$ID` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `likes` int(100) NOT NULL,
  `Upload Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1");

	$sql=mysqli_query($con,"ALTER TABLE `users$ID`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`)");

	$sql=mysqli_query($con,"ALTER TABLE `users$ID`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1");
  
  $sql=mysqli_query($con,"CREATE TABLE `likes_check$ID` (
  `id` int(100) NOT NULL,
  `sic` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `liked_id` int(100) NOT NULL,
  `Liked Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");

	$sql=mysqli_query($con,"ALTER TABLE `likes_check$ID`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `sic` (`sic`(100))");
  
  	$sql=mysqli_query($con,"ALTER TABLE `likes_check$ID`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1");
  
  
  
$file = '../files03';
$newfile = '../files'.$id11.'/files'.$value;


 recurse_copy($file,$newfile);
 $sql=mysqli_query($con,"UPDATE dashboard_url SET verification_code='' WHERE email='$email' && verification_code !=''");	
	echo "yes:$id11:$value:$ID";
}

	 elseif($competition == "Drawing")
	 {
	 $sql=mysqli_query($con,"UPDATE dashboard_url SET status='1' WHERE value='$value'");
	$html="Dear ".$name.",<br>Your request for the ".$version." version is successful. As per your Request the ".$competition." competition platform is successfully created for ".$college.".<br><br> Shareable URL: ".$url."<br><br><br><br><br>Thanks,<br>The E-contest Portal";
	$html1=" ".$college." has hosted the ".$competition." competition with the following details:<br><br> <br>College Name: ".$college."<br>Shareable URL: ".$url;
	smtp_mailer1($email,'Thank you for hosting '.$competition.' competition with E-contest Portal',$html);
	smtp_mailer2($email1,$college.' has hosted the '.$competition.' competition.',$html1);
	
$ID=$id11."_".$value;
	$sql=mysqli_query($con,"CREATE TABLE `register$ID` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sic` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");


	$sql=mysqli_query($con,"ALTER TABLE `register$ID`
  ADD UNIQUE KEY `sic` (`sic`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`) USING BTREE");

  
  	$sql=mysqli_query($con,"CREATE TABLE `users$ID` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `likes` int(100) NOT NULL,
  `Upload Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1");

	$sql=mysqli_query($con,"ALTER TABLE `users$ID`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`)");

	$sql=mysqli_query($con,"ALTER TABLE `users$ID`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1");
  
  $sql=mysqli_query($con,"CREATE TABLE `likes_check$ID` (
  `id` int(100) NOT NULL,
  `sic` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `liked_id` int(100) NOT NULL,
  `Liked Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");

	$sql=mysqli_query($con,"ALTER TABLE `likes_check$ID`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `sic` (`sic`(100))");
  
  	$sql=mysqli_query($con,"ALTER TABLE `likes_check$ID`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1");
  

$file = '../files04';
$newfile = '../files'.$id11.'/files'.$value;


 recurse_copy($file,$newfile);
 $sql=mysqli_query($con,"UPDATE dashboard_url SET verification_code='' WHERE email='$email' && verification_code !=''");	
	echo "yes:$id11:$value:$ID";
}
	 else{
		 $html3="The contest creation for the Premium Version is Unsucessful for the college bearing the following<br><br>Details:<br>College: ".$college."<br> Email: ".$email."<br>ID: ".$ID."<br>Verification Code: ".$otp." Shareable URL: ".$url."<br><br><br><br>Thanks,<br>e-contest portal ";
	smtp_mailer3($email1,'Premium Version OTP Verification',$html3);
		echo "no"; 
	 }
	
}else{
	 	
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
	}else{
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
function smtp_mailer3($to,$subject, $msg){
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