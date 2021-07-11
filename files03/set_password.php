<?php
session_start();
$_SESSION['jassi1']="true";
if(isset($_SESSION['pass']) && $_SESSION['pass']=="true"){
	header("location:login.php");
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
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link rel="stylesheet" a href="css\style.css">
<style type="text/css">
	body{
	margin: 0 auto;
	background-image: url("images/register.jpg");
	background-repeat: no-repeat;
	background-size: 100% 1000px;
}

	.container4{
	text-align: center;
	margin: 0 auto;
	margin-top: -35px;
}
	.container3{
	width: 500px;
	height: 310px;
	text-align: center;
	margin: 0 auto;
	margin-top: -30px;
	position: relative;
    max-width: 400px;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 180px;
}
	.container3 img{
	width: 150px;
	height: 150px;
	margin-top: -200px;
}

    
    .login-form h2 {
        margin: 0 0 15px;
    }
.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #7089d7;
	color: #fff;
	border-radius: 25px;
}
	.form-input{
		text-align: center;
	}
input[type="password"]{
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
 padding-left: 7px;
 padding-top: 5px;
 font-family: "Font Awesome 5 Free";
 position: absolute;
 font-size: 30px;
 color: #2980b9; 
 font-weight:900;
}
	.form-input:nth-child(2)::before{
 padding-left: 7px;
 padding-top: 5px;
 content: "\f023";
font-weight:900;
}

	.avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
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
</style>
</head>
<body>
<form  method="post">
	
<div class="container3">
     
		<img src="images/student.png" alt="Avatar" class="avatar"/>
		<div class="container4">
	    <h2 style="color:white">Set Password</h2>
	    <br/>
		   </div>
	 <div class="form-input">
            <input type="password" id="password1"  placeholder="Enter password" required="required">
			</div>
			<span id="password_error" class="field_error"></span>
	  <div class="form-input">
			<input type="password" id="conf_password1" placeholder="Confirm password" required="required">
     </div>
     		<span id="password_error1" class="field_error"></span>
		    <br/>
            <button type="button" class="btn-login" onclick="send_otp()">SET   &nbsp;PASSWORD</button>
			<br/>
			
	
        </div>
		
       
       
    </form>
</div>
<script>
function send_otp(){
	var password=jQuery('#password1').val();
	var conf_password=jQuery('#conf_password1').val();
	
	jQuery.ajax({
		url:'send_password.php',
		type:'post',
		data: {password: password, conf_password: conf_password},
		success:function(result) {
			console.log(result);
            if(result=='Message has been sentyes'){
				window.location='login.php'
			}
			if(result=='set'){
				jQuery('#password_error').html('Please enter password');
				jQuery('#password_error1').html('');
			}
			if(result=='not_exist'){
				jQuery('#password_error1').html('Password missmatch');
					jQuery('#password_error').html('');
			}
		}
	});
}

		function myFunction(x) {
  x.classList.toggle("change");
}
	

</script>
<style>
.second_box{display:none;}
.field_error{color:red;}
</style>
</body>
</html>                                		                            