<?php
session_start();
if(isset($_SESSION['jassi']) && $_SESSION['jassi']=="false"){
	
}
else{
	header("location:dashboard.php");
}
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
<style type="text/css">
		.avatar2 {
  vertical-align: middle;
  width: 38px;
  height: 38px;
  border-radius: 50%;
		position: absolute;
			
  
  left: 2px;
}
	
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
   
	.container1 {
  position: relative;
  text-align: center;
  color: white;
	
}
.container4 {
  position: relative;
  text-align: center;
  color: white;
top: 20px;
  left: 0px;
}
	
	.container5 {
  position: relative;
  text-align: center;
  color: black;
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
	
	.container10 {
  position: relative;
  text-align: center;
  color: white;
top: 20px;
  left: 0px;
}
		.container32 {
  position: absolute;
  text-align: center;
  color: black;
top: 320px;
  left: 45%;
	font-size: 25px;
}
	
			.container31 {
  position: absolute;
  color: black;
top: 324px;
  left: 55%;
	font-size: 25px;
}
	
	.container23 {
  position: absolute;
  text-align: center;
  color: black;
top: 11.6%;
  left: 45%;
	font-size: 25px;
}
	
	.container26 {
  position: absolute;
  text-align: center;
  color: black;
top: 11.77%;
  left: 50%;
	font-size: 25px;
}
	
	
.container19 {
  position: absolute;
  text-align: center;
  color: black;
top: 201px;
  left: 50%;
	font-size: 25px;
}
.top-left {
  position: absolute;
  top: -8px;
  left: 20px;
font-size: 25px;
}




.centered {
  position: absolute;
  bottom: 30px;
  right: 135px;
}
}
	.container {
  position: relative;
  width: 100%;
  max-width: 400px;
		
}
	.avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
}
	.avatar1 {
vertical-align: middle;
  width: 47px;
  height: 47px;
  border-radius: 50%;
 position: absolute;
  
  left: 2px;
}
	
	.avatar3 {
vertical-align: middle;
  width: 40px;
  height: 40px;
  border-radius: 50%;

}	
	
		.avatar4 {
vertical-align: middle;
  width: 47px;
  height: 47px;
  border-radius: 50%;
 
  
 
}	
	
	
		.top-left11 {
  position: absolute;
  top: 60px;
  left: 140px;
font-size: 30px;
}
	
	
	.container11 {
  position: relative;
	top: -90px;
  left: 0px;
}

	.container01 {
  position: relative;
	top: -70px;
  left: 0px;
}
		.avatar5 {
vertical-align: middle;
  width: 80px;
  height: 90px;
  border-radius: 50%;
 
}
  		.avatar12 {
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
                   
                    <a class="navbar-brand"><img src="images/logo.png" class="avatar12"></a>
                    
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
                        <li><a href="home.php"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span> Dashboard</a></li>
                         <li><a href="login.php"><span class="glyphicon glyphicon-login" aria-hidden="true"></span> Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
</div>

	</br>
</br>
</br>
	<center><h1 style=color:black><B><I>About Us</I></B></h1></center>

	
<p class="container5">
             e-contest portal is the only plateform that facilitates schools and colleges to organise or host any kind of competition virtually. Undoubtedly, this is a revolutionary contribution in the field of education. Organising any competition virtually and bringing the students altogether has never been easier before, but now it has become mandatory to do so via e-contest portal. Due to COVID-19, it is difficult and risky to organise any kind of contest but e-contest portal provides a dashboard to schools and colleges where hosting or organising an event and bringing the students altogether to participate is much easier and flexible.</p>
</div>
	

<div class="container01">
<p class="container5"><i><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</b></i></p>
<div class="container4">
  <img src="images/tyagraj.jpg" alt="Avatar" class="avatar">
</div>
	
	<div class=container10>
<img src="images/call.jpg" onClick="call()" class="avatar4">
	<a href= "mailto:tyagraj.thakur@gmail.com">
<img src="images/email.png" alt="Avatar" class="avatar3"></a>
		</div>

</br>
	<div class="container5">
		<p class="round3"><img src="images/men.png" alt="Avatar" class="avatar1"><B>Faculty Incharge</B></br><I>Dr. Tyagraj Thakur</I></p>
<p class="round3"><img src="images/bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br>Dr. Tyagraj Thakur works as a Senior Assistant Professor in the Department of Basic Science and Humanities (BSH) at Silicon Institute of Technology,Sambalpur. He had his Master’s and Doctoral studies in English from Utkal University, Bhubaneswar and he has been working at Silicon Sambalpur since its inception in August 2009. He has a varied range of interest – Postcolonial Studies, World Literature, Creative Writing and Mass Communication to name a few.

</p>
<div class="container4">
<img src="images/jassi.jpg" alt="Avatar" class="avatar">
	</div>
<div class="container10">		
<img src="images/call.jpg" alt="Avatar" onClick="call1()" class="avatar4">
<a href= "mailto:jasvinder1997@gmail.com" >
	<img src="images/email.png" alt="Avatar" class="avatar3"></a>
	</div>
</br>
	<div class="container5">
		<p class="round3"><img src="images/sardarji.PNG" alt="Avatar" class="avatar1"><B>Secretary</B></br><I>Mr.Jasvinder Singh</I></p>
<p class="round3"><img src="images/bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br>Jasvinder Singh is a computer science and engineering student, has management and convincing skills and is passionate in organizing events. He is a certified android app developer and techaholic.😊 
</p>
<div class="container4">
<img src="images/bishwa.jpg" alt="Avatar" class="avatar">
	</div>

<div class="container10">
		
<img src="images/call.jpg" alt="Avatar" onClick="call2()" class="avatar4">
<a href= "mailto:biswa1594@gmail.com">
	<img src="images/email.png" alt="Avatar" class="avatar3"></a>
</div>
</br>
	<div class="container5">
		<p class="round3"><img src="images/men.png" alt="Avatar" class="avatar1"><B>Joint Secretary</B></br><I>Mr.Biswa Priyadarshan Swain </I></p>
<p class="round3"><img src="images/bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br>Biswa Priyadrshan Swain is a computer science and technology student likes to design logos and news pages etc. He is a specialist in. Repairing computers and solving network issues.
😊 </p>
<div class="container4">
<img src="images/ravi.jpeg" alt="Avatar" class="avatar">
</div>
		</br>
	<div class="container5">
		<p class="round3"><img src="images/men.png" alt="Avatar" class="avatar1"><B>Coordinator</B></br><I>Mr.Ravi Kumar Gupta</I></p>
<p class="round3"><img src="images/bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br> Ravi Kumar Gupta is a computerized Science and engineering student, has a certified web development skill. </p>
<div class="container4">
<img src="images/sonam.jpg" alt="Avatar" class="avatar">
	</div>
		</br>
	<div class="container5">
		<p class="round3"><img src="images/women.png" alt="Avatar" class="avatar1"><B>Coordinator</B></br><I>Ms.Sonam Kumari</I></p>
<p class="round3"><img src="images/bio.jpg" alt="Avatar" class="avatar1"><B>Bio</B></br></br> Sonam Kumari is a Computer Science and Engineering Student. She is a bookworm and techaholic. She has a good convincing skills and believes in unity. </p>
		</br>


<script>

	function call() 
	{
		window.open('tel:919861511651'); 
	}
	function call1() 
	{
		window.open('tel:919348142762'); 
	}
	function call2() 
	{
		window.open('tel:917014408064'); 
	}
</script>
</body>
</html>                                		                            