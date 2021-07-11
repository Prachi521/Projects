<?php
session_start();
$_SESSION['jassi1']="true";
$id11=$_SESSION['id11'];
$id10 = explode("_",$id11); 
$id12 = $id10[0];
if(isset($_SESSION['jassi']) && $_SESSION['jassi']=="false"){
	
}
else{
  $id4=$_SESSION['id11'];
	header("location:dashboard.php?id=$id4");
}

$_SESSION['isloggedout']="true";
$_SESSION['verif']="true";
$_SESSION['registe']="true";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title></title>

	<!-- boostrap css-->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	
	
	
	
	<style type="text/css">
	
				body{
	margin: 0 auto;
	background-color: #33B2FF;
	background-repeat: no-repeat;
	background-size: 100% 750px;
}

		
		
 p.round3 {
  border: 2px solid lightblue;
  border-radius: 50px;
	 font-size: 15px;
	 color: black;
}

	.container img{
	width: 150px;
	height: 150px;
	margin-top: -200px;
}

	#example1 {
  border: 2px solid black;
  padding: 25px;
  background: url(back.jpg);
  background-repeat: no-repeat;
  background-size: auto;
}
	.container2 {
  display: inline-block;
 
}

.bar1, .bar2, .bar3 {
  width: 35px;
  height: 5px;
  background-color: black;
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
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
		.container8 {
  position: relative;
  text-align: center;
  color: black;
	
}


	.container01 {
  text-align: right;
}
	.container5 {
  position: relative;
  text-align: center;
  color: white;
top: 0px;
  left: 0px;
}
	
	.container101{
	margin-top: -50px;
	text-align: center;
  position: relative;
}

.container{
	width: 370px;
	height: 100%;
	text-align: center;
	margin: 0 auto;
	background-color: rgb(255, 255, 255);
	
	border-radius: 50px;
}

.container11{
	
	text-align: left;

	margin-top: 220px;
	
}
.centered {
  position: absolute;
  bottom: 30px;
  right: 135px;
	}
	.btn {        
        font-size: 15px;
        font-weight: bold;
    }
		
		.avatar {
  vertical-align: middle;
  width: 150px;
  height: 100px;

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
		.container3 {
  position: relative;
  margin-top: -15px;
}
	.avatar4 {
vertical-align: middle;
  width: 80px;
  height: 90px;
  border-radius: 50%;
  margin-top: -35px;
}		
</style>
</head>
<body>

<div class="container101">
           
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
		
    $sql=mysqli_query($conn,"select * from users where id='$id12'");
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
                        
                        <li><a href="dashboard.php?id=<?php  echo "$id11" ?>"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li>
                         <li><a href="prize.php?id=<?php  echo "$id11" ?>"><span class="glyphicon glyphicon-queen" aria-hidden="true"></span> Prize &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
</div>
</br>
</br></br></br></br>
</br>
<div class="scroll-left">
<div class="inner">
	<div class="container3">
	<p style="color:black; font-size:20px" ><b>Winner will be decided on the basis of likes. </b></p>
</div>
</div>
	</div>
	</div>
	</br></br>
<div class="container3">
		<div class="container">
	
	  <h2 style="color:black">Gallery</h2>
		 

	<div class="container11">
	<table class="table table-bordered">
		

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

		$sql = "SELECT * FROM users$id11";
		$query = $conn->query($sql);
		
		$x = 1;
		while ($result = $query->fetch_assoc()) {
			$image = substr($result['image'], 3);
			
			if($x!=1)
			{
				echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/>";
			
			}
			else{	
			}
			echo "
				
				 <center><img src='".$image."'  style='height:370px; width:330px;' /></center></br>  </div><div align='right'> User Id: TTE".$result['id']." </div><div align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$result['likes']."</div><div align='center'>   By ".$result['name']."</div>
				  
			"; 
				echo '<br><br><br><a href="#" onclick="fun('.$result['id'].');"> <img src="images/like.png"  style="height:50px; width:50px;"/> </a>  ';
			$x++;
		}
		?>
	</table>
	</div>
</div>
	</div>
<script>
function fun(id){
	window.location='like.php?id='+id;
	
}
	
function myFunction(x) {
  x.classList.toggle("change");
}
</script>
</body>
</html>