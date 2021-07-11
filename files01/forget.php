<?php
session_start();
if(isset($_SESSION['jassi']) && $_SESSION['jassi']=="false"){
	
}
else{
	header("location:dashboard.php");
}

$_SESSION['verifys']="false";
$_SESSION['registers']="false";
header("location:forget_verify.php");
?>