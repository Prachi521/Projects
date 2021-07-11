<?php
session_start();
$_SESSION['jassi']="false";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Learn how to recreate the preloader from Cantina Negrar. Tutorial for a passionate front-end web developers by Petr Tichy.">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	
	
	
	
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP OTP Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	
		.back-link a {
		color: #4ca340;
		text-decoration: none; 
		border-bottom: 1px #4ca340 solid;
	}
	.back-link a:hover,
	.back-link a:focus {
		color: #408536; 
		text-decoration: none;
		border-bottom: 1px #408536 solid;
	}
	h12 {
		height: 100%;
		/* The html and body elements cannot have any padding or margin. */
		margin: 0;
		font-size: 14px;
		font-family: 'Open Sans', sans-serif;
		font-size: 32px;
		margin-bottom: 3px;
	}
	.entry-header {
		text-align: left;
		margin: 0 auto 50px auto;
		width: 80%;
        max-width: 978px;
		position: relative;
		z-index: 10001;
	}
	#demo-content {
		padding-top: 100px;
	}
	
	
	
	
	
	
	
	
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

	

	
	
.scroll-left {
 height: 30px;	
 overflow: hidden;
 position: relative;
}
.scroll-left .inner {
 position: relative;
 width: 100%;
 height: 100%;
 margin: 0px;
 line-height: 43px;
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
	
	
.bar1, .bar2, .bar3 {
  width: 30px;
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
  top:3.2%;
  left: 91%;
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


  .container3 {
  position: relative;
  margin-top: -17px;
}
  .container4 {
  position: relative;
  margin-top: -17px;
}

	.container11 {
  position: relative;
  text-align: ;
  color: red;
	top: 0px;
  left: 0px;
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
	
	
	
body {
  background-color: #a3afb7;
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
                        
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login/SignUp as an institute &nbsp;&nbsp;&nbsp;</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
</div>

	
		</br>
		</br></br>
	<div class="container11">
	
<div class="scroll-left">
<div class="inner">
	<div class="container3">
	<p1 style="color:black; font-size:12px" ><b>All Colleges/Schools can enroll themselves. </b></p1>
		
</div>
</div>
	</div>

<div class="container4">		
		


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/Scrol1.png" height="250px" style="width:100%" >
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/Scrol2.jpg" height="250px"  style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 

</div>
		

	</div>	

		<p style="color:black; font-size:15px;margin-left: 5px;" ><b>About e-contest portal</b></br></p>
		<p style="color:black; font-size:12px;margin-left: 10px;" >
             e-contest portal is the only plateform that facilitates schools and colleges to organise or host any kind of competition virtually. Undoubtedly, this is a revolutionary contribution in the field of education. Organising any competition virtually and bringing the students altogether has never been easier before, but now it has become mandatory to do so via e-contest portal.<a href="aboutUs.php">Read More...</a></p>
	
		
		
<br/>
		<br/>
		
	
</div>
	
	

	<!-- Demo content -->			
	<div id="demo-content">

		<div id="loader-wrapper">
			<div id="loader"><h12 style="color:red" class="entry-title"></h12></div>

			<div class="loader-section section-left"><img src="images/Splash_1.png" height="135%" style="width:96.1%"></div>
            <div class="loader-section section-right"><img src="images/Splash_2.png" height="135%"   style=" width:100%"></div>

		</div>

		<div id="content">
			
		</div>

	</div>	
	</div>
	
	
	
	

	
	
	
	
		

        
 <script>


		
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1800); // Change image every 2 seconds
}		
		
		
		
		function about_Us(){
	jQuery.ajax({
		success:function(){
				window.location='aboutUs.php'
		}
		
	});
	}
function website(){
	jQuery.ajax({
		success:function(){
				window.location='https://thethirdeyesilicon.home.blog/'
		}
	});
	}

function gallery(){
	jQuery.ajax({
		success:function(){
				window.location='view.php'
		}
	});
	}

	 function participate(){
	jQuery.ajax({
		success:function(){
				window.location='login.php'
		}
	});
	}
	 
	 
	function myFunction(x) {
  x.classList.toggle("change");
}
</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>

<script src="https://account.snatchbot.me/script.js"></script><script> setTimeout(function(){ window.sntchChat.Init(118443); },2000);</script> 
<style>
.second_box{display:none;}
.field_error{color:red;}
</style>
</body>
</html>                                		                            