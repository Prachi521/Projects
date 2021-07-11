<?php
session_start();
if(isset($_SESSION['register']) && $_SESSION['register']=="true"){
	header("location:login.php");
}
if(isset($_SESSION['pass1']) && $_SESSION['pass1']=="true"){
	header("location:login.php");
}
$_SESSION['passs']="true";
$_SESSION['register']="true";
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

	<!-- file input css -->
	<link rel="stylesheet" type="text/css" href="assets/fileinput/css/fileinput.min.css">
	
	
	
	
	
	<style type="text/css">
	
 p.round3 {
  border: 2px solid lightblue;
  border-radius: 50px;
	 font-size: 15px;
	 color: black;
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
   
	.container0 {
  position: relative;
  text-align: center;
  color: white;
	
}
.container4 {
  position: relative;
  text-align: center;
  color: white;
top: 30px;
  left: 0px;
}
	
	.container5 {
  position: relative;
  text-align: center;
  color: white;
top: 0px;
  left: 0px;
}
		.container9 {
  position: relative;
  text-align: center;
  color: lightblue;
top: 0px;
  left: 0px;
}
.container6 {
  position: absolute;
  text-align: center;
  color: black;
top: 145px;
  left: 152px;
	font-size: 25px;
}
	.top-left1 {
  position: absolute;
  top: -5px;
  left: 130px;
font-size: 30px;
}

	.container11 {
  position: relative;
  
  color: red;
	top: -60px;
  left: 0px;
}




.centered {
  position: absolute;
  bottom: 30px;
  right: 135px;
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

</style>
</head>
<body>
</br>
</br>	

<div class="scroll-left">
<div class="inner">
	<div class="container3">
	<p style="color:black; font-size:19px" ><b>Thanks for registering on our platform.</b></p>
</div>
</div>
	</div>
</div>
	</br>

<div class="container11">
		
<div class="col-md-5 col-sm-5 col-md-offset-4 col-sm-offset-4">
		<div class="page-header">
			<h2 style="color:purple"><center><B><I>Upload Your College's Image</I></B></center></h2>
			
		
			<a href="login.php" class="btn btn-default">Login</a>
		</div>

		<div id="messages"></div>

		<form action="php_action/uploadImage.php" method="post" enctype="multipart/form-data" id="uploadImageForm">
		  <div class="form-group">
		    <label for="fullName" style="color:black">Name</label>
		    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter the college name to be displayed on the dashboard"><p style="color:red">(Max 20 characters)</p>
		  </div>
			
			
		  <div class="form-group">
		    <label for="exampleInputPassword1" style="color:black">Photo</label>		    
		    <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>

            <div class="kv-avatar center-block" style="width:200px">
		        <input id="avatar-2" name="userImage" type="file" class="file-loading">
		    </div>
		  </div>
			
<center><button type="submit" class="btn btn-default"  >Upload</button></center>
		</form>

	</div></div>
	
	<!-- jquery -->
	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<!-- bootsrap js -->
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- file input -->
	<script src="assets/fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>	
	<script src="assets/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>	
	<script src="assets/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="assets/fileinput/js/fileinput.min.js"></script>

	<script type="text/javascript">
			var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' + 
		    'onclick="alert(\'Call your custom code here.\')">' +
		    '<i class="glyphicon glyphicon-tag"></i>' +
		    '</button>'; 
		$("#avatar-2").fileinput({
	    overwriteInitial: true,
	    maxFileSize: 5500,
	    showClose: false,
	    showCaption: false,
	    showBrowse: false,
	    browseOnZoneClick: true,
	    removeLabel: '',
	    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
	    removeTitle: 'Cancel or reset changes',
	    elErrorContainer: '#kv-avatar-errors-2',
	    msgErrorClass: 'alert alert-block alert-danger',
	    defaultPreviewContent: '<img src="images/upload.png" alt="Your Avatar" style="width:160px"><h6 class="text-muted">Click to select</h6>',
	    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
	    allowedFileExtensions: ["gif", "jpg", "jpeg", "png", "JPG", "PNG", "GIF", "JPEG"]
		});

		$(document).ready(function() {
			$("#uploadImageForm").unbind('submit').bind('submit', function() {

				var form = $(this);
				var formData = new FormData($(this)[0]);

				$.ajax({
					url: form.attr('action'),
					type: form.attr('method'),
					data: formData,
					dataType: 'json',
					cache: false,
					contentType: false,
					processData: false,
					async: false,
					success:function(response) {
						if(response.success == true) {
							$("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
						  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
						  response.messages + 
						'</div>');

							$('input[type="text"]').val('');
							$(".fileinput-remove-button").click();
						}
						else {
							$("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
						  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
						  response.messages + 
						'</div>');
						}
					}
				});

				return false;
			});
		});
		
		
		
		
		

	</script>


</body>
</html>