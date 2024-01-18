<?php
session_start();
include('config.php'); 



 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
</head>
<body>
  <button style="color: yellow;"><h4><a href="index.php" class="btn">logout</a></h4></button>
   <div style="clear:both"></div>
             <br/>

             <h3>Order Details</h3>
             <div class="table-responsive">
              <table class="table table-bordered">
                <tr>
                  <th width="40%">Item Name</th>
                  <th width="40%">Item Model</th>
                  <th width="10%">Quantity</th>
                  <th width="20%">Price</th>
                  <th width="15%">Total</th>
                  <th width="5%">Action</th>
                </tr>
                <?php 
                  if (!empty($_SESSION["shopping_cart"])) {
                    $total = 0;
                    foreach ($_SESSION["shopping_cart"] as $key => $value) {
                      
                    }
                  }
                 ?>
                 <tr>
                  <td><?php echo $value["item_name"] ?></td>
                  <td><?php echo $value["item_model"] ?></td>
                  <td><?php echo $value["item_quantity"] ?></td>
                  <td><?php echo $value["item_price"] ?></td>
                  <td>Kshs</td>
                  <td><a href="product.php?action=delete&id=<?php echo $value['item_id'];
                  ?>"><span class="btn btn-danger">Remove</span></a></td>
                  
                 </tr>
                 <?php 
                 //total amount calculation
                  $total =($value["item_quantity"] * $value["item_price"]);
                 
                  ?>
                  <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">Kshs <?php echo number_format($total, 2); ?></td>
                  </tr>
                
              </table>

</body>
</html>