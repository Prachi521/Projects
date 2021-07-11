<?php
session_start();
$id11=$_SESSION['id11'];
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
<title> Login Form in HTML5 and CSS3</title>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link rel="stylesheet" a href="css\style.css">
<style type="text/css">
	
body {
  background-color: #8899ce;
}

.container{
	width: 500px;
	height: 515px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 130px;
}
.container3{
	
	text-align: center;
	margin: 0 auto;
	margin-top: -60px;
}
.container img{
	width: 200px;
	height: 200px;
	margin-top: -110px;
}

input[type="text"]{
	margin-top: 4px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
 content: "\f023";
 font-family: "Font Awesome 5 Free";
 padding-left: 07px;
 padding-top: 5px;
 position: absolute;
 font-size: 30px;
 color: #2980b9; 
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
  width: 200px;
  height: 200px;
  border-radius: 50%;
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
                        
                        <li><a href="dashboard.php?id=<?php  echo "$id11" ?>"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
</div>

 <div class="container">
 <img src="images/logo.png" alt="Avatar" class="avatar"/>
	 <div class="container3">
	  <h2 style="color:white">Online Payment Gateway</h2>
	  <h5 style="color:white">(Premium Version)</h5>
		 </div>
 <form>
	 <br/>
	 
<?php
$con=mysqli_connect('localhost','id14491146_projectsilicon123','Siliconinstitute@123','id14491146_projectsilicon');
    $sql=mysqli_query($con,"select * from register where id='$id11'");
    $email='email-error';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$email=$row["email"];
	}
}
$sql=mysqli_query($con,"select * from dashboard_url where email='$email' && verification_code !='' ");
    $value='(Not Generated)';
    if($sql->num_rows>0){
	while($row=$sql->fetch_assoc()){
		$value=$row["value"];
	}
}
echo "<div align='center' style='color:red; font-size:15px'>Please make online payment of $25<br>on the number mentioned below:<br><b>9122931105</b><br><i><u>Payment Modes</u>:<br>Phone Pay Or Google Pay</i><br>Your Payment ID is: <b>$id11$value</b><br><i>(Please mention it in the payment gateway description)</i></div>"; 
?>		
	 
	 
	 <br/>
<div class="form-input">
<input type="text" id="verification_code" placeholder="Enter Verification Code" required="required"/>
    </div>
<span id="password_error" class="field_error"></span>

	 <?php
echo "<div align='center' style='color:red; font-size:15px'><i>(After the payment the Varification Code will be sent to your registered Email ID)</i></div>"; 
?>		
<br/>
	 <br/>
 <input type="button"  value="Host Competition" class="btn-login" onclick="send()" /> 
 </form>
 </div>
<script>
function send(){
var otp=jQuery('#verification_code').val();
jQuery.ajax({
	url:'verification_check.php',
	type:'post',
	data:'otp='+otp,
	success:function(result) {
          if(result.split(":")[0]=='yes'){
				window.location='https://minorprojectsilicon.000webhostapp.com/files'+result.split(":")[1]+'/files'+result.split(":")[2]+'/dashboard.php?id='+result.split(":")[3];
			}
			if(result=='not_exist'){
				jQuery('#password_error').html('Please enter the correct verification code');
			}
			if(result=='set'){
				jQuery('#password_error').html('Please enter the verification code');
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