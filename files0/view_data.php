<?php
session_start();
$id11=$_GET['id'];
$id10 = explode("_",$id11); 
$id12 = $id10[0];
$id13 = $id10[1];
$_SESSION['id11']=$id11;
$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
	$sql=mysqli_query($con,"select * from register where id='$id12'");
    $email='email-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
	}
}
	$sql=mysqli_query($con,"select * from dashboard_url where value='$id13' && email='$email'");
    $version='version-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$version=$row["version"];
	}
}
if($version=='Free')
{
    header("location:error1.php");
}
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Econtest Portal</title>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link rel="stylesheet" a href="css\style.css">

</head>
<body>
    </br><center>
    <h1>View the data of the registered students</h1>
 
<h2>Registration Details:</h2>
<div class="container">
			<br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Students Details" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		<br />
		<h2>Uploaded Image Details:</h2>
<div class="container">
			<br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text1" placeholder="Search by Students Details" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result1"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		<br />
		<h2>Visitors Like Details:</h2>
		<div class="container">
			<br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text2" placeholder="Search by Students Details" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result2"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
</center>

	<script>
				
	$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"student_fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});	
			$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"view_upload_fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result1').html(data);
			}
		});
	}
	
	$('#search_text1').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});	

	$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"view_visitors_fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result2').html(data);
			}
		});
	}
	
	$('#search_text2').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});	
</script>
</body>
</html>