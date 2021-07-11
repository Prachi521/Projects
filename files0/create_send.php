<?php
session_start();
$id11=$_SESSION['id11'];
$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
$version=$_POST['version'];
$competition=$_POST['competition'];
$email1="econtestportal@gmail.com";

if($version!="" && $competition!="")
{
if($version=="Free" && $competition=="Drawing"){
	
		
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
	$sql=mysqli_query($con,"select * from register where id='$id11'");
    $email='email-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
	}
}
	$college1="<S.I.T>";
	$sql=mysqli_query($con,"select * from dashboard_url where college='$college1'");
    $value='value-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$value=$row["value"];
	}
}
	

	$value=$value+1;
	$ID=$id11."_".$value;
	$share_url="https://minorprojectsilicon.000webhostapp.com/files$id11/files$value/dashboard.php?id=".$ID;
	$sql=mysqli_query($con,"INSERT INTO dashboard_url (college, version, competition, email, url, value, verification_code, status) VALUES ('$college', '$version', '$competition', '$email', '$share_url', '$value', '', '1')");
	$sql=mysqli_query($con,"UPDATE dashboard_url SET value='$value' WHERE college='$college1'");
	$html="Dear ".$name.",<br>Your request for the ".$version." version is successful. As per your Request the ".$competition." competition platform is successfully created for ".$college.".<br><br> Shareable URL: ".$share_url."<br><br><br><br><br>Thanks,<br>The E-contest Portal";
	$html1=" ".$college." has hosted the ".$competition." competition with the following details:<br><br> <br>College Name: ".$college."<br>Shareable URL: ".$share_url;
	smtp_mailer1($email,'Thank you for hosting '.$competition.' competition with E-contest Portal',$html);
	smtp_mailer2($email1,$college.' has hosted the '.$competition.' competition.',$html1);
	

	$sql=mysqli_query($con,"CREATE TABLE `register$ID` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` text COLLATE utf8_unicode_ci NOT NULL,
  `college` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `otp` int(10) NOT NULL,
  `Registration Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
	
	$sql=mysqli_query($con,"ALTER TABLE `register$ID`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`)");
	
	$sql=mysqli_query($con,"ALTER TABLE `register$ID`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1");
  
  
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
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `liked_id` int(100) NOT NULL,
  `Liked Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");

	$sql=mysqli_query($con,"ALTER TABLE `likes_check$ID`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`)");
  
  	$sql=mysqli_query($con,"ALTER TABLE `likes_check$ID`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1");
  
  
  
$file = '../files01';
$newfile = '../files'.$id11.'/files'.$value;


 recurse_copy($file,$newfile);
	echo "yes:$id11:$value:$ID";
}


elseif($version=="Free" && $competition=="Article")
{
    		
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
	$sql=mysqli_query($con,"select * from register where id='$id11'");
    $email='email-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
	}
}
	$college1="<S.I.T>";
	$sql=mysqli_query($con,"select * from dashboard_url where college='$college1'");
    $value='value-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$value=$row["value"];
	}
}
	

	$value=$value+1;
	$ID=$id11."_".$value;
	$share_url="https://minorprojectsilicon.000webhostapp.com/files$id11/files$value/dashboard.php?id=".$ID;
	$sql=mysqli_query($con,"INSERT INTO dashboard_url (college, version, competition, email, url, value, verification_code, status) VALUES ('$college', '$version', '$competition', '$email', '$share_url', '$value', '', '1')");
	$sql=mysqli_query($con,"UPDATE dashboard_url SET value='$value' WHERE college='$college1'");
	$html="Dear ".$name.",<br>Your request for the ".$version." version is successful. As per your Request the ".$competition." competition platform is successfully created for ".$college.".<br><br> Shareable URL: ".$share_url."<br><br><br><br><br>Thanks,<br>The E-contest Portal";
	$html1=" ".$college." has hosted the ".$competition." competition with the following details:<br><br> <br>College Name: ".$college."<br>Shareable URL: ".$share_url;
	smtp_mailer1($email,'Thank you for hosting '.$competition.' competition with E-contest Portal',$html);
	smtp_mailer2($email1,$college.' has hosted the '.$competition.' competition.',$html1);
	

	$sql=mysqli_query($con,"CREATE TABLE `register$ID` (
  `id` int(100) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` text COLLATE utf8_unicode_ci NOT NULL,
  `college` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `otp` int(10) NOT NULL,
  `Registration Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");
	
	$sql=mysqli_query($con,"ALTER TABLE `register$ID`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`)");
	
	$sql=mysqli_query($con,"ALTER TABLE `register$ID`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1");
  
  
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
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `liked_id` int(100) NOT NULL,
  `Liked Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");

	$sql=mysqli_query($con,"ALTER TABLE `likes_check$ID`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`)");
  
  	$sql=mysqli_query($con,"ALTER TABLE `likes_check$ID`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1");
  
  
  
$file = '../files02';
$newfile = '../files'.$id11.'/files'.$value;


 recurse_copy($file,$newfile);
	echo "yes:$id11:$value:$ID";
}

else{
    
    	$sql=mysqli_query($con,"select * from register where id='$id11'");
    $college='college-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$college=$row["college"];
	}
}
	$sql=mysqli_query($con,"select * from register where id='$id11'");
    $email='email-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
	}
}
    $college1="<S.I.T>";
	$sql=mysqli_query($con,"select * from dashboard_url where college='$college1'");
    $value='value-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$value=$row["value"];
	}
}
	

	$value=$value+1;
	$ID=$id11."_".$value;
	$share_url="https://minorprojectsilicon.000webhostapp.com/files$id11/files$value/dashboard.php?id=".$ID;
	$sql=mysqli_query($con,"UPDATE dashboard_url SET verification_code='' WHERE email='$email' && verification_code !=''");	
    $otp=rand(11111,99999);
	$html3="Premium Version OTP Verification Code for ".$college." bearing ID: ".$ID." is ".$otp."<br><br>Details:<br>College: ".$college."<br> Email: ".$email."<br>ID: ".$ID."<br>Verification Code: ".$otp." <br>Shareable URL: ".$share_url."<br><br><br><br>Thanks,<br>e-contest portal ";
    $sql=mysqli_query($con,"INSERT INTO dashboard_url (college, version, competition, email, url, value, verification_code, status) VALUES ('$college', '$version', '$competition', '$email', '$share_url', '$value', '$otp', '2')");
    $sql=mysqli_query($con,"UPDATE dashboard_url SET value='$value' WHERE college='$college1'");
	smtp_mailer3($email1,'Premium Version OTP Verification',$html3);
    
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