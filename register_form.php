<?php 
	
session_start();

	include ("config.php");
	
	

	

	



	if (isset($_POST['submit'])){
		$name=mysqli_real_escape_string($conn, $_POST['name']);
		$email=mysqli_real_escape_string($conn, $_POST['email']);
		$phone=mysqli_real_escape_string($conn, $_POST['phone']);
		$pass=md5($_POST['password']);
		$cpass=md5($_POST['cpassword']);
		$user_type=($_POST['user_type']);


		$select="SELECT * FROM login WHERE email='$email' && password='$pass'";
		$result=mysqli_query($conn, $select);
		if ($result->num_rows >0) {
			$error[]='user already exists';
		}else{
			if ($pass != $cpass) {
				$error[]='password not matched';
			}else{
				$insert="INSERT INTO login (name, email, phone, password, user_type) VALUES ('$name', '$email', '$phone', '$pass', '$user_type')";
				mysqli_query($conn, $insert);
				header("location:login_form.php");
				die();
			}
		}


	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	
	
	<div class="form-container">
		<form action="" method="POST">
			<h3>Register now</h3>
		<?php
		if (isset($error)) {
		 	foreach ($error as $error) {
		 		echo '<span class="error-msg">'.$error.'</span>';

		 	};
		 } ;


		 ?>
		 <br>
	Name:<br>
	<input type="text" name="name" placeholder="enter name" required><br>
	Email:<br>
	<input type="email" name="email" placeholder="enter your email" required><br>
	Phone No:<br>
	<input type="text" name="phone" placeholder="enter phone number" required><br>
	Password:<br>
	<input type="password" name="password" placeholder="enter password" required><br>
	Confirm Password:<br>
	<input type="password" name="cpassword" placeholder="confirm password" required><br>
	<select name="user_type">
		<option value="user">user</option>
		<option value="admin">admin</option>
		
	</select><br><br>

	<button name="submit" class="form-btn">Register</button>
	<p>already have an account? <a href="login_form.php">login here</a></p>
	</form>
	</div>

</body>
</html>