<?php
session_start();
if(isset($_SESSION['jassi']) && $_SESSION['jassi']=="false"){
	
}
else{
	header("location:dashboard.php");
}
 $_SESSION['register']="false";
header("location:forget_verify1.php");
?>