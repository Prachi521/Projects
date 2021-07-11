<?php
session_start();
if(isset($_SESSION['jassi']) && $_SESSION['jassi']=="false"){
	
}
else{
	header("location:home.php");
}

$_SESSION['verify']="false";
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
		
		
body {
  background-color: #a3afb7;
}

.container{
	width: 500px;
	height: 370px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 160px;
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

input[type="text"],input[type="text"]{
	margin-top: 4px;
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
 padding-top: 5px;
 position: absolute;
 font-size: 30px;
 color: #2980b9; 
 font-weight:900;
}
 
.form-input:nth-child(2)::before{
 content: "\f19c";
font-weight:1100;
}
.form-input:nth-child(3)::before{
 content: "\f095";
padding-top: 8px;
padding-left: 09px;
font-weight:600;
font-size: 25px;
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
  width: 30px;
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
                  
                  <div class="navbar-brand" style="color:white;">e-contest portal</div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
</div>

</br>
	</br>
</br>
	
	
	
 <div class="container">
 <img src="images/school.png" alt="Avatar" class="avatar"/>
	 <div class="container3">
	  <h2 style="color:white">REGISTER&nbsp;COLLEGE&nbsp;</h2>
		 </div>
 <form>
	
 <div class="form-input">
<input type="text" id="name1" placeholder="Enter your name" required="required"/>
	 </div>
	  <div class="form-input">
<input type="text" id="college1" placeholder="Enter your school / college" required="required"/>
</div>
	  <div class="form-input">
<input type="text" id="phone1" placeholder="Enter your phone-no" required="required"/>
	  </div>
	 <span id="password_error" class="field_error"></span>
	 <br/>
	 <br/>

 
 <input type="button"  value="SIGNUP" class="btn-login" onclick="send()" />
	 
 </form>
	
 </div>
	<script>
	function send(){
	var name=jQuery('#name1').val();
	var college=jQuery('#college1').val();
	var phone=jQuery('#phone1').val();
	jQuery.ajax({
		url:'https://minorprojectsilicon.000webhostapp.com/files/register_send.php',
		type:'post',
		data: {name: name, college: college, phone: phone},
		success:function(result) {
            if(result=='empty'){
				jQuery('#password_error').html('Please enter your name, college & phone_no');
			}
			if(result=='not_empty'){
					window.location='verify.php'
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