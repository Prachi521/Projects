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
$_SESSION['pass']="true";
$_SESSION['register']="true";
$_SESSION['passs']="true";
$_SESSION['registers']="true";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP OTP Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 <title> Login Form in HTML5 and CSS3</title>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link rel="stylesheet" a href="css\style.css">

	<style type="text/css">
		
		
		body{
	margin: 0 auto;
	background-image: url("images/login.jpg");
	background-repeat: no-repeat;
	background-size: 100% 1000px;
	
}
		

.container{
	width: 370px;
	height: 480px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 120px;
}
.container3{
	
	text-align: center;
	margin: 0 auto;
	
	margin-top: -30px;
}
.container img{
	width: 150px;
	height: 150px;
	margin-top: -180px;
}
 
input[type="email"],input[type="password"]{
 margin-top: 30px;
 height: 45px;
 width: 300px;
 font-size: 18px;
 margin-bottom: 20px;
 background-color: #fff;
 padding-left: 40px;
}
 
.form-input::before{
 content: "\f007";
 font-family: "Font Awesome 5 Free";
 padding-left: 07px;
 padding-top: 30px;
 position: absolute;
 font-size: 30px;
 color: #2980b9; 
font-weight:900;
}
 
.form-input:nth-child(2)::before{
content: "\f023";
font-weight:900;
}
.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
	border-radius: 25px;
}
.avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
		
		
		
		.container2 {
  display: inline-block;
 
}

.bar1, .bar2, .bar3 {
  width: 35px;
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
  top: 3.2%;
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
			.container {
  position: relative;
  width: 100%;
  max-width: 400px;
		
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
                         <li><a href="prize.php?id=<?php  echo "$id11" ?>"><span class="glyphicon glyphicon-queen" aria-hidden="true"></span> Prize &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
</div>

	</br>
</br>
	</br>
</br>
		</br>
 <div class="container">
 <img src="images/student.png" alt="Avatar" class="avatar"/>
	 
	 <div class="container3">
	  <h2 style="color:white">Login</h2>
		 </div>
 <form>
	
 <div class="form-input">
	
 <input type="email" id="email1" placeholder="Enter the email-id" required="required"/>
	 </br> <span id="email_error" class="field_error"></span>
 </div>
	 
 <div class="form-input">
 <input type="password" id="password1" placeholder="Enter the password" required="required"/>
	 </br> <span id="password_error" class="field_error"></span>
 </div>
</br>
 <input type="button"  value="LOGIN" class="btn-login" onclick="send()" />
	 
	  </br>
	 </br>
	 <a style="color:red" href="forget.php"><i><u>Forgot Password?</u></i></a>
	</br>
	</br>
<p style="color:whitesmoke"><b>Don't have an account?</b></p>
	 <input type="button"  value="PARTICIPATE" class="btn-login" onclick="window.location.href='register.php'" />
</br>
 </form>
	
 </div>
	<script>
	function send(){
	var email=jQuery('#email1').val();
	var password=jQuery('#password1').val();
	jQuery.ajax({
		url:'check.php',
		type:'post',
		data: {email: email, password: password},
		success:function(result) {
            if(result=='yes'){
				window.location='index_Upload.php'
			}
			if(result=='not_exist'){
				jQuery('#email_error').html('Password mismatch');
				jQuery('#password_error').html('');
			}
			if(result=='set'){
				jQuery('#password_error').html('Please Enter the Email & Password');
				jQuery('#email_error').html('');
			}
		}
	});
}
		

	</script>
<style>
	.field_error{color:red;}
</style>
</body>
</html>