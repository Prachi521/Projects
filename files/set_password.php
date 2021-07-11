<?php
session_start();
if(isset($_SESSION['register']) && $_SESSION['register']=="true"){
	header("location:register.php");
}
$_SESSION['verify']="true";
if(isset($_SESSION['passs']) && $_SESSION['passs']=="true"){
	header("location:index_Upload.php");
}
$_SESSION['pass1']="false";
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
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="login-form">
    <form  method="post">
        <h2 class="text-center">Set Password&nbsp;</h2> 
	
        <div class="form-group first_box">
		<br/>
            <input type="password" id="password1" class="form-control" placeholder="Enter password" required="required">
			<span id="password_error" class="field_error"></span>
			<br/>
			
			<input type="password" id="conf_password1" class="form-control" placeholder="Confirm password" required="required">
			<span id="password_error1" class="field_error"></span>
			
		<br/>
      </div>
        <div class="form-group first_box">
            <button type="button" class="btn btn-primary btn-block" onclick="send_otp()">SET   &nbsp;PASSWORD</button>

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
            if(result=='Message has been sentyes'){
				window.location='index_Upload.php'
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


</script>
<style>
.second_box{display:none;}
.field_error{color:red;}
</style>
</body>
</html>                                		                            