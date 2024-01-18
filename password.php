<?php 	

	if (isset($_POST['submit'])){
		header("location:index.php");
	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>change password</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<div class="form-container">
		<form action="" method="post">
			<h3>Change password</h3>
			<?php
		if (isset($error)) {
		 	foreach ($error as $error) {
		 		echo '<span class="error-msg">'.$error.'</span>';

		 	};
		 } ;


		 ?>

		
	
	
	<input type="text" name="password" placeholder="Current password"><br><br>
	
	<input type="text" name="password" placeholder="New password"><br><br>
	<input type="text" name="password" placeholder="Confirm new password"><br><br>
	<button name="submit" class="form-btn">Submit</button> <br><br>
	
	</form>
	</div>
 		
 		
 		
 	</form>
 
 </body>
 </html>