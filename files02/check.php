<?php
session_start();
$id11=$_SESSION['id11'];
$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
$email=$_POST['email'];
$password=$_POST['password'];
if($email!="" && $password!=""){
$res=mysqli_query($con,"select * from register$id11 where email='$email' && password='$password'");
$count=mysqli_num_rows($res);
if($count>0){
	$_SESSION['email']=$email;
	$_SESSION['isloggedout']="false";
	echo "yes";
}
else{
	echo "not_exist";
}}
else{
	echo "set";
}

?>