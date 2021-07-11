<?php
session_start();
$_SESSION['isloggedout']="true";
header("location:login.php");
?>
