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
    <h1>Feed the data of the registered students</h1>
 <?php
    
	echo "<br><br><br>Download the sample excel file: <a href=\"http://minorprojectsilicon.000webhostapp.com/files0/Student_Data.xlsx\"><input type='submit' style='padding: 0px 1px;font-size: 12px;cursor: pointer;' value='Download'></br></a>";
	echo "Rename the sheet as register$id11<br>";
	echo "Then feed the data of the registered students.<br>";
	echo "** id, sic & email are the manditory fields to be filled by the college**";
	echo "<br><br><br><br><br><br><br>";
    echo "After feeding the data choose the excel file and upload:<br><br><br>";
 
 ?>
    
    
    
<form action="#" method="POST" enctype="multipart/form-data">
	<input type="file" name="excel">
	<input type="submit" name="submit">
</form>
<?php








if(isset($_FILES['excel']['name'])){
	$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
	include "xlsx.php";
	if($con){
		$excel=SimpleXLSX::parse($_FILES['excel']['tmp_name']);
		echo "<pre>";	
		// print_r($excel->rows(1));
		print_r($excel->dimension(2));
		print_r($excel->sheetNames());
        for ($sheet=0; $sheet < sizeof($excel->sheetNames()) ; $sheet++) { 
        $rowcol=$excel->dimension($sheet);
        $i=0;
        if($rowcol[0]!=1 &&$rowcol[1]!=1){
		foreach ($excel->rows($sheet) as $key => $row) {
			//print_r($row);
			$q="";
			foreach ($row as $key => $cell) {
				//print_r($cell);echo "<br>";
				if($i==0){
					$q.=$cell. " varchar(50),";
				}else{
					$q.="'".$cell. "',";
				}
			}
			if($i==0){
				$query="CREATE table ".$excel->sheetName($sheet)." (".rtrim($q,",").");";
			}else{
				$query="INSERT INTO ".$excel->sheetName($sheet)." values (".rtrim($q,",").");";
			}
			echo $query;
			if(mysqli_query($con,$query))
			{
				echo "true";
			}
			echo "<br>";
			$i++;
		}
	}
		}
	}
}
    
 echo"<br>After completing this process the students will be registered for the ongoing competition.<br><br><br>";

?>
<h2>Details of the registered students:</h2>
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
		
</script>
</body>
</html>