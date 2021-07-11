<?php
session_start();
$Name=$_POST['name'];
$College=$_POST['college'];
$Phone=$_POST['phone'];

if($Name=="" || $College=="" || $Phone=="")
{
	echo 'empty';
}
else
{
	
	$_SESSION['Name']=$Name;
	$_SESSION['College']=$College;
	$_SESSION['Phone']=$Phone;
	$_SESSION['register']="false";
	echo 'not_empty';
}

?>
