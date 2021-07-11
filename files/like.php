<?php
session_start();
if(isset($_SESSION['jassi']) && $_SESSION['jassi']=="false"){
	
}
else{
	header("location:home.php");
}

$id1=$_GET['id'];
$_SESSION['ID']=$id1;
$_SESSION['verif']="false";
$_SESSION['registe']="false";
header("location:like_verify.php");
?>
