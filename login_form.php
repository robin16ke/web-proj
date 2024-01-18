<?php 
	session_start();
	include ("config.php");

	if (isset($_POST['submit'])){
		$email=mysqli_real_escape_string($conn, $_POST['email']);
		$pass=md5($_POST['password']);

		$select="SELECT * FROM login WHERE email='$email' && password='$pass'";
		$result=mysqli_query($conn, $select);
		if ($result->num_rows >0) {
			$row=mysqli_fetch_assoc($result);
			$_SESSION['name']= $row['name'];
			header("location:index.php");
		}else{
			$error[]='Email or Password incorrect';
		}
					}
	

 ?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="form-container">
		<form action="" method="post">
			<h3>Login now</h3>
			<?php
		if (isset($error)) {
		 	foreach ($error as $error) {
		 		echo '<span class="error-msg">'.$error.'</span>';

		 	};
		 } ;


		 ?>

		
	
	
	<input type="email" name="email" required placeholder="enter your email"><br><br>
	
	<input type="password" name="password" required placeholder="enter your password"><br><br>
	
	

	<button name="submit" class="form-btn">Login</button> <br><br>
	<p>Don't have an account? <a href="register_form.php">register here</a></p>
	</form>
	</div>

</body>
</html>

