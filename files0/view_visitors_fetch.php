<?php
session_start();
$id11=$_SESSION['id11'];
$connect = mysqli_connect("localhost", "id14491146_projectsilicon123", "Siliconinstitute@123", "id14491146_projectsilicon");

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM likes_check$id11 
	WHERE id LIKE '%".$search."%'
	OR sic LIKE '%".$search."%' 
	OR email LIKE '%".$search."%' 
	OR liked_id LIKE '%".$search."%' 
	OR Liked Time LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM likes_check$id11 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Id</th>
							<th>Sic</th>
							<th>Email</th>
							<th>Liked ID</th>
							<th>Liked Time</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["sic"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["liked_id"].'</td>
				<td>'.$row["Liked Time"].'</td>
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