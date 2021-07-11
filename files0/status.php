<?php
session_start();
$id11=$_GET['id'];
$id10 = explode("_",$id11); 
$id12 = $id10[0];
$id13 = $id10[1];
$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
$sql=mysqli_query($con,"UPDATE dashboard_url SET status='0' WHERE value='$id13'");
header("location:dashboard.php?id=$id12");
?>

