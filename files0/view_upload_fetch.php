<?php
session_start();
$id11=$_SESSION['id11'];
$id10 = explode("_",$id11); 
$id12 = $id10[0];
$id13 = $id10[1];
$connect = mysqli_connect("localhost", "id14491146_projectsilicon123", "Siliconinstitute@123", "id14491146_projectsilicon");

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM users$id11 
	WHERE id LIKE '%".$search."%'
	OR name LIKE '%".$search."%' 
	OR image LIKE '%".$search."%' 
	OR email LIKE '%".$search."%' 
	OR likes LIKE '%".$search."%'
	OR Upload Time LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM users$id11  ORDER BY id ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Image Url</th>
							<th>Email</th>
							<th>Likes</th>
							<th>Upload Time</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["name"].'</td>
				<td>https://minorprojectsilicon.000webhostapp.com/files'.$id12.'/files'.$id13.'/files3/'.$row["image"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["likes"].'</td>
				<td>'.$row["Upload Time"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>