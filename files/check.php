<?php
session_start();
$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
$email=$_POST['email'];
$password=$_POST['password'];
if($email!="" && $password!=""){
$res=mysqli_query($con,"select * from register where email='$email' && password='$password'");
$count=mysqli_num_rows($res);
if($count>0){
    
	
	$_SESSION['isloggedout']="false";
	$sql=mysqli_query($con,"select * from register where email='$email'");
    $id='0';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$id=$row["id"];
	}
}

	echo "yes:$id";
}
else{
	echo "not_exist";
}}
else{
	echo "set";
}

?>