<?php
session_start();
if(isset($_SESSION['registe']) && $_SESSION['registe']=="true"){
	header("location:view.php");
}

if(isset($_SESSION['verif']) && $_SESSION['verif']=="true"){
	header("location:view.php");
}
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
        <h2 class="text-center">Verify Email&nbsp;</h2>       
        <div class="form-group first_box">
            <input type="email" id="email1" class="form-control" placeholder="Enter Email" required="required">
			<span id="email_error" class="field_error"></span>
			<br/>
			
	
        </div>
        <div class="form-group first_box">
            <button type="button" class="btn btn-primary btn-block" onclick="send_otp()">Send OTP</button>

        </div>
        <div class="form-group second_box">
            <input type="text" id="otp" class="form-control" placeholder="OTP" required="required">
			<span id="otp_error" class="field_error"></span>
        </div>
        <div class="form-group second_box">
            <button type="button" class="btn btn-primary btn-block" onclick="submit_otp()">Submit OTP</button>
        </div>       
    </form>
</div>
<script>
function send_otp(){
	var email=jQuery('#email1').val();
	jQuery.ajax({
		url:'like_send_otp.php',
		type:'post',
		data:'email='+email,
		success:function(result) {
            if(result=='Message has been sentnot_exist'){
				jQuery('.second_box').show();
				jQuery('.first_box').hide();
			}
			if(result=='yes'){
				jQuery('#email_error').html('You have already liked');
			}
			if(result=='set'){
				jQuery('#email_error').html('Please enter the email');	
			}
		}
	});
}

function submit_otp(){
	var otp=jQuery('#otp').val();
	jQuery.ajax({
		url:'like_check_otp.php',
		type:'post',
		data:'otp='+otp,
		success:function(result){
			if(result=='yes'){
			
				window.location='view.php'
			}
			if(result=='not_exist'){
				jQuery('#otp_error').html('Please enter valid otp');
			}
			if(result=='set'){
				jQuery('#otp_error').html('Please enter the otp');	
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