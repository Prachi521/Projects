<?php
session_start();
if(isset($_SESSION['jassi']) && $_SESSION['jassi']=="false"){
	
}
else{
	header("location:dashboard.php");
}

$id1=$_GET['id'];
$_SESSION['val']=$id1;
$_SESSION['register']="false";
header("location:page1_like.php");
?>
