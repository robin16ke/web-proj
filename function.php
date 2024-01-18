<?php 


	function check_login($conn){

		if (isset($_SESSION['name'])) {
			$name=$_SESSION['name'];
			$query = "SELECT * FROM user_db WHERE name='$name'";
			$result = mysqli_query($conn, $query);

			if (mysqli_num_rows($result)>0) 
			{
				$user_data= mysqli_fetch_assoc($result); 
				return $user_data;
			}
		}
		//redirect to login
		header("location:login_form.php");
		die();
	}



 ?>
 <!DOCTYPE html>
<html>
<head>
	
	
	<title>login form</title>
	
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
	<p>Don't have an account? <a href="register_form.php">register now</a></p>
	</form>
	</div>

</body>
</html>