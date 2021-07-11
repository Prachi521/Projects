<?php
session_start();
$id11=$_SESSION['id11'];
$id10 = explode("_",$id11); 
$id12 = $id10[0];
if(isset($_SESSION['jassi']) && $_SESSION['jassi']=="false"){
	
}
else{
	   $id4=$_SESSION['id11'];
	header("location:dashboard.php?id=$id4");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TTE</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">


	.avatar4 {
vertical-align: middle;
  width: 80px;
  height: 90px;
  border-radius: 50%;
  margin-top: -35px;
}
	

	

	.container01 {
  position: relative;
	top: -70px;
  left: 0px;
}
	
 .logo {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        
        .terms {
            color: white;
        }
        
        .rainbow {
            background-image: repeating-linear-gradient(45deg, violet, indigo, blue, green, yellow, orange, red, violet);
            text-align: center;
            background-size: 800% 800%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 35px;
            animation: rainbow 8s ease infinite;
        }
        
        @keyframes rainbow {
            0% {
                background-position: 0% 50%
            }
            50% {
                background-position: 100% 25%
            }
            100% {
                background-position: 0% 50%
            }
        }
        
        .rainbow2 {
            background-image: repeating-linear-gradient(45deg, green, yellow, orange, red, violet, violet, indigo, blue);
            text-align: center;
            background-size: 800% 800%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 30px;
            animation: rainbow 8s ease infinite;
        }
        
        
        
        .terms {
            background-color: #262626;
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
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login/Signup as a student  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
</div>
</br></br></br></br><img src="images/first.png" alt="logo" class="logo" height=90px width=100%>

		</br></br></br>
<div class="container01">
 
    <br>
    <center><img src="images/winner.png" alt="mainpic" class="main" height=80px width=50%></center>
    <center>
		</br>
        <b><p class="rainbow">The Winner will be awarded exciting prizes</p></b>
		</br>
    </center>
  
    <hr>
    
    <center>
        <img src="images/part.png" alt="mainpic" class="main" height=80px width=50%></br></br>
        <b><p class="rainbow2">All the participants will be awarded e-certificates</p></b>
    </center>
    <center><img src="https://image.freepik.com/free-vector/certificate-template-background-award-diploma-design-blank-illustration_118124-2511.jpg" class="cert" height=200px width=350px></center>
   
  </br></br>
 

    <div class="terms">
        <hr>
        <center>
            <h1>Terms and Conditions</h1>
        </center>
        <hr>
        <b>
        <ul>
            <li>Winner will be decided on the basis of the number of likes</li>
            <li>The contestant having most number of like will be declared WINNER</li>
            <li>If two or more contestants have equal number of like then lucky draw will be done</li>
            <li>The team of Third Eye will be monitoring all the things and if someone found doing fake votes will be disqualified</li>
        </ul></b>
        <hr>
    </div>
</div>
<script>
	function myFunction(x) {
  x.classList.toggle("change");
}
	
</script>
</body>
</html>                                		                            