<?php
session_start();
$id11=$_SESSION['id11'];
$_SESSION['jassi1']="false";
if(isset($_SESSION['register']) && $_SESSION['register']=="true"){
	header("location:forget_verify2.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Econtest Portal</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 <title> Login Form in HTML5 and CSS3</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link rel="stylesheet" a href="css\style.css">

	<style type="text/css">
		
		body{
	margin: 0 auto;
	background-image: url("images/register.jpg");
	background-repeat: no-repeat;
	background-size: 100% 1000px;
}
.container{
	width: 500px;
	height: 270px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 180px;
}
.container3{
	
	text-align: center;
	margin: 0 auto;
	
	margin-top: -30px;
}
.container img{
	width: 150px;
	height: 150px;
	margin-top: -200px;
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
 content: "\f007";
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
	background-color: #7089d7;
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
	</style>
</head>
<body>
		


	</br>
</br>
	
	
	
 <div class="container">
 <img src="images/student.png" alt="Avatar" class="avatar"/>
	 <div class="container3">
	  <h2 style="color:white">Verify Your Credentials</h2>
		 </div>
 <form>
	 <br/>
	 <br/>
 <div class="form-input">
<input type="text" id="ID" placeholder="Enter your sic" required="required"/>
	 </div>
	 <span id="password_error" class="field_error"></span>
	 <br/>
 <input type="button"  value="Confirm ID" class="btn-login" onclick="send()" />
	 
 </form>
	
 </div>
	<script>
	function send(){
	var ID=jQuery('#ID').val();
	jQuery.ajax({
		url:'forget_send_otp.php',
		type:'post',
		data:'ID='+ID,
		success:function(result) {
            if(result=='Message has been sentyes'){
				window.location='forget_verify2.php'
			}
			if(result=='not_exist'){
				jQuery('#password_error').html('Please enter valid sic');
			}
			
			if(result=='set'){
				jQuery('#password_error').html('Please enter the sic');	
			}
		}
	});
}
		
		


function myFunction(x) {
  x.classList.toggle("change");
}
	</script>
<style>
	.field_error{color:red;}
</style>

</body>
</html>