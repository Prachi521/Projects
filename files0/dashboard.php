<?php
session_start();
$_SESSION['jassi']="false";
$id11=$_GET['id'];
$_SESSION['id11']=$id11;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Learn how to recreate the preloader from Cantina Negrar. Tutorial for a passionate front-end web developers by Petr Tichy.">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	
	
	
	
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>e-contest portal</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	
		.back-link a {
		color: #4ca340;
		text-decoration: none; 
		border-bottom: 1px #4ca340 solid;
	}
	.back-link a:hover,
	.back-link a:focus {
		color: #408536; 
		text-decoration: none;
		border-bottom: 1px #408536 solid;
	}
	h12 {
		height: 100%;
		/* The html and body elements cannot have any padding or margin. */
		margin: 0;
		font-size: 14px;
		font-family: 'Open Sans', sans-serif;
		font-size: 32px;
		margin-bottom: 3px;
	}
	.entry-header {
		text-align: left;
		margin: 0 auto 50px auto;
		width: 80%;
        max-width: 978px;
		position: relative;
		z-index: 10001;
	}
	#demo-content {
		padding-top: 100px;
	}
	
	
	
	
	
	
	
	
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

	

	
	
.scroll-left {
 height: 40px;	
 overflow: hidden;
 position: relative;
}
.scroll-left .inner {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: scroll-left 15s linear infinite;
 -webkit-animation: scroll-left 15s linear infinite;
 animation: scroll-left 15s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes scroll-left {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes scroll-left {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes scroll-left {
 0%   { 
 -moz-transform: translateX(100%); /* Browser bug fix */
 -webkit-transform: translateX(100%); /* Browser bug fix */
 transform: translateX(100%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Browser bug fix */
 -webkit-transform: translateX(-100%); /* Browser bug fix */
 transform: translateX(-100%); 
 }
}
	
	
.bar1, .bar2, .bar3 {
  width: 30px;
  height: 5px;
  background-color: white;
  margin: 6px 0;
  transition: 0.4s;
}

.change .bar1 {
  -webkit-transform: rotate(-45deg) translate(-9px, 6px);
  transform: rotate(-45deg) translate(-9px, 6px);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  -webkit-transform: rotate(45deg) translate(-8px, -8px);
  transform: rotate(45deg) translate(-8px, -8px);
}
	.dropbtn {
  background-color: transparent;
  color: black;
  padding: 6px;
  font-size: 3px;
  border: none;
}

.dropdown {
	
  display: inline-block;
position: absolute;
  top:3.2%;
  left: 86%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  color: black;
  font-size: 16px;
  padding: 0px 0px;
  border: none;
  
  text-align: center;
}

.dropdown-content {
 
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 60px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 10px 0px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: transparent;}


  .container101 {
  position: relative;
  margin-top: 80px;
}

  .container3 {
  position: relative;
  margin-top: -5px;
}
  .container4 {
  position: relative;
  margin-top: -90px;
}
 .container5 {
  position: relative;
  margin-top: 0px;
 text-align: center;
 font-size: 11px;
}


	.container11 {
  position: relative;
  text-align: ;
  color: red;
	top: 0px;
  left: 0px;
}


	

	.avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
	.avatar1 {
  vertical-align: middle;
  width: 45px;
  height: 45px;
  border-radius: 50%;
		position: absolute;
  
  left: 2px;
}

	.btn {        
        font-size: 15px;
        font-weight: bold;
    }
	
	
	body {
   margin: 0; 
   padding: 0;
   background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);
    }

		.avatar4 {
vertical-align: middle;
  width: 80px;
  height: 90px;
  border-radius: 50%;
  margin-top: -35px;
}
table, th, td {
  border: 2px solid black;
   text-align: center;
 padding: 5px;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
table.a {
  margin-left: auto;
  margin-right: auto;
  table-layout: fixed;
   width: 90%;
  height: auto;
}

</style>
</head>
<body>
    <div class="container1111">	

               <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container1111">
               
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                   
                    <a class="navbar-brand"><img src="images/logo.png" class="avatar4"></a>
                    
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  
                  <div class="navbar-brand"><?php 
		$server = 'localhost';
    	$username = 'id14491146_projectsilicon123';
    	$password = 'Siliconinstitute@123';
	    $dbname = 'id14491146_projectsilicon';

		$conn = new mysqli($server, $username, $password, $dbname);

		// check db connection
		if($conn->connect_error) {
			die("Connection Failed : " . $conn->connect_error);
		} 
		else {
			// echo "Successfully Connected";
		}
		
    $sql=mysqli_query($conn,"select * from users where id='$id11'");
        $name="error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$name=$row["name"];
    	}
    }
		echo "<div align='left' style='color:white; font-size:25px'>".$name."</div>"; 
		?></div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="payment.php"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Payment</a></li>
                        <li><a href="https://minorprojectsilicon.000webhostapp.com/files/home.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
</div>
</br>
</br>
<div class="container11">
<div class="scroll-left">
<div class="inner">
	<div class="container3">
	<p1 style="color:black; font-size:12px" ><b>Welcome to e-contest portal.</b></p1>
		
</div>
</div>
	</div>
</div>
<div class="container101">
<div class="container4">		
	<?php 
		// database connection
		session_start();
		$id11=$_SESSION['id11'];
		
		$server = 'localhost';
    	$username = 'id14491146_projectsilicon123';
    	$password = 'Siliconinstitute@123';
	    $dbname = 'id14491146_projectsilicon';

		$conn = new mysqli($server, $username, $password, $dbname);

		// check db connection
		if($conn->connect_error) {
			die("Connection Failed : " . $conn->connect_error);
		} 
		else {
			// echo "Successfully Connected";
		}

		$sql=mysqli_query($conn,"select * from users where id='$id11'");
        $image="error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$image = substr($row["image"], 3);
    	}
    }
		echo "<center><img src='".$image."'  style='height:250px; width:100%;' /></center>"; 
		
		?>
	</div>	
<br/>
		<br/>
		<center><button type="button" class="btn btn-primary" onclick="create()">Create Competition</button></center>
		</br></br>
		</div>
	<div class="container5">
	    <label style='font-size:20px'>Hosted_Competition_Info:</label>
	<table class="a">
    <tr>
    <th>ID</th>
    <th colspan=4>Competition</th>
     <th colspan=3>Version</th>
    <th colspan=2>Url</th>
     <th colspan=2>Status</th>
    <th colspan=2>Insert</th>
     <th colspan=2>End</th>
    <th colspan=2>View</th>
  </tr>
  <tr>
    <td>
		<?php 
		// database connection
		session_start();
		$id11=$_SESSION['id11'];
		$server = 'localhost';
		$username = 'id14491146_projectsilicon123';
		$password = 'Siliconinstitute@123';
		$dbname = 'id14491146_projectsilicon';

		$conn = new mysqli($server, $username, $password, $dbname);

		// check db connection
		if($conn->connect_error) {
			die("Connection Failed : " . $conn->connect_error);
		} 
		else {
			// echo "Successfully Connected";
		}
  $sql=mysqli_query($conn,"select * from register where id='$id11'");
        $email="email-error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
		
    	}
    }	
		$sql = "SELECT * FROM dashboard_url where email='$email'";
		$query = $conn->query($sql);
	
		while ($result = $query->fetch_assoc()) {
			$value = $result['value'];
			
		
			echo "<div align='center'>".$id11."".$value."</div>"; 
		}
		?></td>
    <td colspan=4><?php 
		// database connection
		session_start();
		$id11=$_SESSION['id11'];
		$server = 'localhost';
		$username = 'id14491146_projectsilicon123';
		$password = 'Siliconinstitute@123';
		$dbname = 'id14491146_projectsilicon';

		$conn = new mysqli($server, $username, $password, $dbname);

		// check db connection
		if($conn->connect_error) {
			die("Connection Failed : " . $conn->connect_error);
		} 
		else {
			// echo "Successfully Connected";
		}
        $sql=mysqli_query($conn,"select * from register where id='$id11'");
        $email="email-error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
		
    	}
    }	
		$sql = "SELECT * FROM dashboard_url where email='$email'";
		$query = $conn->query($sql);
		while ($result = $query->fetch_assoc()) {
			$competition = $result['competition'];
			
		
			echo "<div align='center'>".$competition."</div>"; 
		}
		?></td>
     <td colspan=3><?php 
		// database connection
		session_start();
		$id11=$_SESSION['id11'];
		$server = 'localhost';
		$username = 'id14491146_projectsilicon123';
		$password = 'Siliconinstitute@123';
		$dbname = 'id14491146_projectsilicon';

		$conn = new mysqli($server, $username, $password, $dbname);

		// check db connection
		if($conn->connect_error) {
			die("Connection Failed : " . $conn->connect_error);
		} 
		else {
			// echo "Successfully Connected";
		}
        $sql=mysqli_query($conn,"select * from register where id='$id11'");
        $email="email-error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
		
    	}
    }	
		$sql = "SELECT * FROM dashboard_url where email='$email'";
		$query = $conn->query($sql);
		while ($result = $query->fetch_assoc()) {
			$version = $result['version'];
			
		
			echo "<div align='center'>".$version."</div>"; 
		}
		?></td>
    <td colspan=2><?php 
		// database connection
		session_start();
		$id11=$_SESSION['id11'];
		$server = 'localhost';
		$username = 'id14491146_projectsilicon123';
		$password = 'Siliconinstitute@123';
		$dbname = 'id14491146_projectsilicon';

		$conn = new mysqli($server, $username, $password, $dbname);

		// check db connection
		if($conn->connect_error) {
			die("Connection Failed : " . $conn->connect_error);
		} 
		else {
			// echo "Successfully Connected";
		}
        $sql=mysqli_query($conn,"select * from register where id='$id11'");
        $email="email-error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
		
    	}
    }	
		$sql = "SELECT * FROM dashboard_url where email='$email'";
		$query = $conn->query($sql);
		while ($result = $query->fetch_assoc()) {
			$url = $result['url'];
			
		
			echo "<div align='center' style='font-size: 11px;
        font-weight: bold;'><a href=\"" .$url. "\">Link</a></div>"; 
		}
		?></td>
     <td colspan=2><?php 
		// database connection
		session_start();
		$id11=$_SESSION['id11'];
		$server = 'localhost';
		$username = 'id14491146_projectsilicon123';
		$password = 'Siliconinstitute@123';
		$dbname = 'id14491146_projectsilicon';

		$conn = new mysqli($server, $username, $password, $dbname);

		// check db connection
		if($conn->connect_error) {
			die("Connection Failed : " . $conn->connect_error);
		} 
		else {
			// echo "Successfully Connected";
		}
        $sql=mysqli_query($conn,"select * from register where id='$id11'");
        $email="email-error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
		
    	}
    }	
		$sql = "SELECT * FROM dashboard_url where email='$email'";
		$query = $conn->query($sql);
		while ($result = $query->fetch_assoc()) {
			$status = $result['status'];
			if($status=='1')
		{
			echo "<div align='center'>Active</div>"; 
		}
		elseif($status=='2'){
		    echo "<div align='center' style='font-size: 8px;
        font-weight: bold;'><a href=\"payment.php\">Pay_Due</div>";
		}
		else{
		    echo "<div align='center'>Inactive</div>";
		}
		}
		?></td>
    <td colspan=2><?php 
		// database connection
		session_start();
		$id11=$_SESSION['id11'];
		$server = 'localhost';
		$username = 'id14491146_projectsilicon123';
		$password = 'Siliconinstitute@123';
		$dbname = 'id14491146_projectsilicon';

		$conn = new mysqli($server, $username, $password, $dbname);

		// check db connection
		if($conn->connect_error) {
			die("Connection Failed : " . $conn->connect_error);
		} 
		else {
			// echo "Successfully Connected";
		}
        $sql=mysqli_query($conn,"select * from register where id='$id11'");
        $email="email-error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
		
    	}
    }	
		   $sql = "SELECT * FROM dashboard_url where email='$email'";
		    $query = $conn->query($sql);
		    while ($result = $query->fetch_assoc()) {
			$value = $result['value'];
	    	echo "<a target='new' href=\"index.php?id=".$id11."_".$value."\"><input type='submit' style='padding: 0px 0px;font-size: 4.5px;cursor: pointer;' value='Student_Data'></br></a>";
		    }
		?></td>
     <td colspan=2><?php 
		// database connection
		session_start();
		$id11=$_SESSION['id11'];
		$server = 'localhost';
		$username = 'id14491146_projectsilicon123';
		$password = 'Siliconinstitute@123';
		$dbname = 'id14491146_projectsilicon';

		$conn = new mysqli($server, $username, $password, $dbname);

		// check db connection
		if($conn->connect_error) {
			die("Connection Failed : " . $conn->connect_error);
		} 
		else {
			// echo "Successfully Connected";
		}
        $sql=mysqli_query($conn,"select * from register where id='$id11'");
        $email="email-error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
		
    	}
    }	
		$sql = "SELECT * FROM dashboard_url where email='$email'";
		$query = $conn->query($sql);
		while ($result = $query->fetch_assoc()) {
			$value = $result['value'];
		echo "<a href=\"status.php?id=".$id11."_".$value."\"><input type='submit' style='padding: 0px 0px;font-size: 4.8px;cursor: pointer;' value='Competition'></br></a>";
		}
		?></td>
		  <td colspan=2><?php 
		// database connection
		session_start();
		$id11=$_SESSION['id11'];
		$server = 'localhost';
		$username = 'id14491146_projectsilicon123';
		$password = 'Siliconinstitute@123';
		$dbname = 'id14491146_projectsilicon';

		$conn = new mysqli($server, $username, $password, $dbname);

		// check db connection
		if($conn->connect_error) {
			die("Connection Failed : " . $conn->connect_error);
		} 
		else {
			// echo "Successfully Connected";
		}
        $sql=mysqli_query($conn,"select * from register where id='$id11'");
        $email="email-error";
         if($sql->num_rows>0){
    	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
		
    	}
    }	
		$sql = "SELECT * FROM dashboard_url where email='$email'";
		$query = $conn->query($sql);
		while ($result = $query->fetch_assoc()) {
			$value = $result['value'];
		echo "<a href=\"view_data.php?id=".$id11."_".$value."\"><input type='submit' style='padding: 0px 0px;font-size: 4.5px;cursor: pointer;' value='Student_Data'></br></a>";
		}
		?></td>
  </tr>
 
</table>

</div>
 <script>
	function create(){
	jQuery.ajax({
		success:function(){
				window.location='create_competition.php'
		}
		
	});
	}



	 
</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>


<style>
.second_box{display:none;}
.field_error{color:red;}
</style>
</body>
</html>                                		                            