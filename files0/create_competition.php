<?php 
session_start();
$id11=$_SESSION['id11'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MhoTech</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
	<style>
	body {
   margin: 0; 
   padding: 0;
   background: -webkit-linear-gradient(left, #25c481, #25b7c4);
    background: linear-gradient(to right, #25c481, #25b7c4);
    }


.container3{
	
	text-align: center;
	margin: 0 auto;
	
	margin-top: -30px;
}
.container4 img{
	width: 150px;
	height: 150px;
	margin-top: -180px;
}

input[type="email"],input[type="text"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;

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
		
		
		.container4{
	width: 400px;
	height: 350px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: -80px;
}
		
		.container9{
	
	text-align: center;
	margin-top: 0px;
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
  top: 3.2%;
  left: 85%;
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
  padding: 5px 2px;
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
			.container4 {
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

</br>	

<center><img src="images/logo.png" style="border-radius: 50% " height="200px" width="200px"/></center>

</br></br>
<div class="container">
			
	
			
			
 <div class="container4">

	 <div class="container3">
	  <h2 style="color:white">Competition Hosting&nbsp;&nbsp;</h2>
		 </div>
<div class="form-input">
 <br><br>
  <p>Please select the version:</p>
  <input type="radio" name="version" value="Free">
  <label for="Free Version">Free Version</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="version" value="Premium">
  <label for="Premium Version">Premium Version</label>
	<br>
	<br>
	<br>
	
<label for="competition">Choose a competition:</label><br>
<select id="competition">
  <option value="Drawing">Drawing Competition</option>
  <option value="Article">Atricle Writing Competition</option>
</select>
  <br>
	<br>
	<span id="password_error" class="field_error"></span>
	<br>
	<br>
 <input type="button"  value="Create Competition" class="btn-login" onclick="send()" />
 </form>
	
 </div>
	



			
		
<script type="text/javascript">

	function send(){
	    const rbs = document.querySelectorAll('input[name="version"]');
	      let version;
            for (const rb of rbs) {
                if (rb.checked) {
                    version = rb.value;
                    break;
                }
            }
	
	var competition=jQuery('#competition').val();
	jQuery.ajax({
		url:'create_send.php',
		type:'post',
		data: {version: version, competition: competition},
		success:function(result) {
		  
            if(result.split(":")[0]=='yes'){
				window.location='https://minorprojectsilicon.000webhostapp.com/files'+result.split(":")[1]+'/files'+result.split(":")[2]+'/dashboard.php?id='+result.split(":")[3];
			}
			if(result=='not_exist'){
					window.location='payment.php'
			}
			if(result=='set'){
				jQuery('#password_error').html('Please select the correct option');
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