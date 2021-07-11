<?php
session_start();
$Name=$_POST['name'];
$Phone=$_POST['phone'];

if($Name=="" || $Phone=="")
{
	echo 'empty';
}
else
{
	
	$_SESSION['Name']=$Name;
	$_SESSION['Phone']=$Phone;
	$_SESSION['register']="false";
	echo 'not_empty';
}

?>
