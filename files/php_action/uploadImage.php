<?php 
session_start();
if($_POST) {
	// database connection
		$server = 'localhost';
    	$username = 'id14491146_projectsilicon123';
    	$password = 'Siliconinstitute@123';
	    $dbname = 'id14491146_projectsilicon';

	$conn = new mysqli($server, $username, $password, $dbname);

	// check db connection
	if($conn->connect_error) {
		die("Connection Failed : " . $conn->connect_error);
	} 
	else {
		// echo "Successfully Connected";
	}

	$valid = array('success' => false, 'messages' => array());

	$name = $_POST['fullName'];
    $email = $_SESSION['email'];
	
	$type = explode('.', $_FILES['userImage']['name']);
	$type = $type[count($type) - 1];
	$url = '../../uploads/' . uniqid(rand()) . '.' . $type;
	if( $name!="" && $_FILES['userImage']['name']!="")
	{
	if(in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'PNG', 'GIF', 'JPEG'))) {
		if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
			if(move_uploaded_file($_FILES['userImage']['tmp_name'], $url)) {

				// insert into database
				$res=mysqli_query($conn,"select * from register where email='$email'");
				$count=mysqli_num_rows($res);
				if($count>0){
					
				$sql = "INSERT INTO users (name, image, email, likes) VALUES ('$name', '$url','$email','0')";

				if($conn->query($sql) === TRUE) {
					$insertedId=$conn->insert_id;
					
					
					$valid['success'] = true;
					$valid['messages'] = "Successfully Uploaded";
					
					
					$html="Dear ".$name.",<br>Your dashboard  is successfully created!!<br>Please login to create new competitions for your students.<br><br><br><br><br><br>Thanks,<br>Econtest Portal";
					smtp_mailer1($email,'Thanks for enrolling your college',$html);
					
   
}

				
				
				else {
					$valid['success'] = false;
					$valid['messages'] = "You Have Already Uploaded";
				}
				}
				else{
					$valid['success'] = false;
					$valid['messages'] = "Email Does'nt Exists";
				}
				
				

			}
			else {
				$valid['success'] = false;
				$valid['messages'] = "Error While Uploading";
			}
			
		}
	}
	}
	else {
				$valid['success'] = false;
				$valid['messages'] = "Enter the name & select the drawing";
		
	
			}
	
	
	

	echo json_encode($valid);

 
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
$conn->close();