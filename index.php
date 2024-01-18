<?php 
 session_start();
	include("config.php");


	if (!isset($_SESSION['name'])) {
		header('location: login_form.php');
	}
	


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ujenzi management system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">

	body{
		background-color: honeydew;
	}
	.footer{
		background-color: mediumpurple;
		color: white;
	}	
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: mediumpurple;
      border: 1px solid #555;
}
.color{
	color: yellow;
}
.header{
	color: blue;
	background-color: honeydew;
    padding: 10px;
    text-align: left;
   ;
}


li {
    float: left;
}

li a {
    display: block;
    color: ghostwhite;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: blue;
    color: yellow;
}
.logout{
	background-color: blue;
	color: yellow;
}

.active {
	color: white;
    background-color: #111;
}div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
    padding: 10px 20px 10px 20px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
.desc{
	text-transform: capitalize;
	background-color: dimgray;
	opacity: 1.0;

}
.copyright{
	
	text-align: center;
	
	margin: 0;
	padding: 10px;
	
}
.bg-form{
		
	background-color: honeydew;
	color: white;
}
.admin{
	float: right;
}




	</style>
</head>
<body>
	
		<div class="header">
  <h1><u><i>Ujenzi</i></u> Enterprises</h1>
  
</div>
	
	
	 
	 <div>
	 <ul >


  		<li><a href="">Home</a></li>
  		<li><a href="product.php">Products</a></li>
 			<li><a href="about.php">About</a></li>
  		<li><a href="contact.php">Contact Us</a></li>
  		<li class="admin"><a href="admin_page.php">Admin</a></li>
	</ul>
	</div><br>
	<table>
		<tr>
		<td><?php echo "Welcome " .  $_SESSION['name']; ?></td>
		</tr>
		<tr>
		<td><a href="password.php"><h4>Change password</h4></a></td>
		</tr>
		<tr>
		<td><a href="login_form.php"><button class="logout">Logout</button></a></td>
		</tr>
	
	</table><br><br>
	

	<div class="bg-form">
	
	


<div class="gallery">
  <a target="_blank" href="asphalt-paver.jpg">
    <img style="width:180px;height: 100px;" src="img/asphalt-paver.jpg" >
  </a>
  <div class="desc">Asphalt-paver</div>
</div>

<div class="gallery">
  <a target="_blank" href="Roller-machine.jpg">
    <img style="width:180px;height: 100px;" src="img/Roller-machine.jpg" >
  </a>
  <div class="desc">Roller-machine</div>
</div>

<div class="gallery">
  <a target="_blank" href="Concrete-pump.jpg">
    <img style="width:180px;height: 100px;" src="img/Concrete-pump.jpg"  >
  </a>
  <div class="desc">Concrete-pump</div>
</div>

<div class="gallery">
  <a target="_blank" href="tipper.jpg">
    <img style="width:150px;height: 100px;" src="img/tipper.jpg"  >
  </a>
  <div class="desc">Tipper</div>
</div>

<div class="gallery">
  <a target="_blank" href="motor-grader.jpg">
    <img style="width:180px;height: 100px;" src="img/motor-grader.jpg" >
  </a>
  <div class="desc">Motor-Grader</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<hr>
			<div class="copyright">
	<p >Copyright ©2022   <h3><u><i>Ujenzi</i></u> Enterprises</h3>
. All Rights Reserved . Designed by <b>RK_Tech</b> solutions</p>
	
 		</div>
	
	 

</body>


</html>