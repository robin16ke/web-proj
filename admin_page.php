<?php 
	session_start();
	include ("config.php");

	if (!isset($_SESSION['name'])) {
		header('location: login_form.php');
	}


	





 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin page</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div class="container">
		<div class="content">
			<h3><span><?php echo "Welcome " .  $_SESSION['name']; ?></span></h3>
			
			<ul>
				<a href="cart.php"><li>View orders</li></a>
				<a href="product.php"><li>Update user's details</li></a>
				<a href="product.php"><li>Update products</li></a>
				<a href="index.php"><li>Remove users</li></a>

			</ul>
			
			<a href="index.php" class="btn">logout</a>
		</div>
	</div>

</body>
</html>