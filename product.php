<?php 
	session_start();
	include('config.php');


	if (isset($_POST["add_to_cart"])) {
		if (isset($_SESSION["shopping_cart"])) {
			$item_array_id = array_column($_SESSION['shopping_cart'], "item_id");
			if (!in_array($_GET['id'], $item_array_id)) {
				$count= count($_SESSION["shopping_cart"]);
				$item_array=array(
					'item_id'  => $_GET['id'],
					'item_name'  => $_POST['hidden_name'],
					'item_model'  => $_POST['hidden_model'],
					'item_price'  => $_POST['hidden_price'],
					'item_quantity'  => $_POST['quantity']);
				$_SESSION["shopping_cart"][$count] =$item_array;
			}
			else{
				echo '<script>alert("item already added")</script>';
				echo '<script>window.location="product.php"</script>';
			}
		}
		else{
			$item_array=array(
					'item_id'  => $_GET['id'],
					'item_name'  => $_POST['hidden_name'],
					'item_model'  => $_POST['hidden_model'],
					'item_price'  => $_POST['hidden_price'],
					'item_quantity'  => $_POST['quantity']);
			$_SESSION["shopping_cart"][0]=$item_array;
		}
	}
	if (isset($_GET['action'])) {
		if ($_GET['action']=="deleted") {
			foreach ($_SESSION["shopping_cart"] as $key => $value) {
				if ($value['item_id']==$_GET['id']) {
					// remove
					unset($_SESSION["shopping_cart"][$keys]);
					echo '<script>alert("item removed successfully")</script>';
					echo '<script>window.location="cart.php"</script>';

				}
			}
		}
	}

	 	


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Products Page</title>
 	<script type="text/javascript" src="js/bootstrap.min.js"></script>

 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 

 	<style type="text/css">
 		.header{
	color: blue;
	background-color: honeydew;
    padding: 10px;
    text-align: left;
   ;
}
body{
		background-color: lightblue;
		height: auto;
		width: auto;
		overflow-x: scroll;
	}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: mediumpurple;
      border: 1px solid #555;
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

li a:hover(.active) {
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
}
		.copyright{
			text-transform: capitalize;
			text-align: center;
			
		}
h3{
	color: blue;
}


 	</style>
 </head>
 <body><br>
 	<header>
 		<div class="header">
  <h1><u><i>Ujenzi</i></u> Enterprises</h1>
  
</div>
	
	
	 
	 <div>
	 <ul class="home">


  		<li><a href="index.php">Home</a></li>
  		<li><a href="product.php">Products</a></li>
 		<li><a href="about.php">About</a></li>
  		 
  		<li><a href="contact.php">Contact Us</a></li>
  		<li style="width:80px; height: 80px; float: right;"><a href="cart.php"><img src="img/cart.jpg"></a></li>
	</ul>
	</div>
	</header>
 	<p style="text-transform: capitalize;">Welcome to <strong>Ujenzi products</strong><p><br>
 		<div class="container-fluid">
 			<div class="col-md-12">
 				<div class="row">
 					<div class="col-md-8">
 						<h2 class="text-center"><u><strong>Machines Available</strong></u></h2><br>
 						<div class="col-md-12">
 							<div class="row">
 								
 							
 						<?php 
 						
 						$query="SELECT * FROM items ORDER BY id ASC";
 						$result=mysqli_query($conn, $query) or die( mysqli_error($conn));
 						while ($row =mysqli_fetch_array($result)) {?>
 							<div class="col-md-4" style=" background-color: honeydew; border: 10px solid lightblue;">
 							<form method="post" action="product.php?action=add&id=<?php $row['id']; ?>">
 								
 								<img src="img/<?php echo $row['image']; ?>" class="" style="width:210px;height: 150px;padding: 10px; "/><br/>
 								<h4 class="text-info" ><?php  echo $row['name'];?></h4 >
 								<h4 class="text-info"><?php echo $row['model'];?></h4>
 								<h4 class="text-danger">Kshs <?php echo $row['price'];?></h4>
 								<input type="text" name="quantity" class="form-control" value="1" style="width: 50%;" />
 								<input type="hidden" name="hidden_name" value="<?php echo $row['name']?>">
 								<input type="hidden" name="hidden_model" value="<?php echo $row['model']?>">
 								<input type="hidden" name="hidden_price" value="<?php echo $row['price']?>">
 							
 								<input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add To Cart">
 								
 								
 							</form>
 							</div>
 						<?php }


 						 ?>
 						
 						 </div>
 						 </div>
 							
 						</div>
 						
 					</div>
 					
 					





 						



 						 
 						
 					</div>
 					
 				</div>
 				
 			</div>
 			
 		</div>
 		
 		 
 		 <hr>
			<div class="copyright">
	<p >Copyright ©2022   <h3><u><i>Ujenzi</i></u> Enterprises</h3>
. All Rights Reserved . Designed by <b>RK_Tech</b> solutions</p>
	
 		</div>

 	


 		<br><br><br></br>
 		<hr>
 		
 
 </body>
 </html>