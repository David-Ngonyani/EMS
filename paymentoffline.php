<?php
session_start();
include 'db_conn.php';
include 'component.php' ;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet"  href="new.css">
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
	<div class="container">
		<?php include 'header2.php';?>
		<div class="row py-5" style="margin-left:200px;">
			<div class="col-md-6">

				 <table class='table table-info' style='width:800px; color:black;'>
  
    <tr>
      <th scope='col' class='table-warning'>#</th>
      <th scope='col' class='table-warning'>Product Name</th>
      <th scope='col' class='table-warning'>Product image</th>
      <th scope='col' class='table-warning'>Product Price</th>
      <th scope='col' class='table-warning'>Description</th>
      <th scope='col' class='table-warning'>Action</th>
    </tr>
    
              <?php 
			$total =0;
			if($_SESSION['cart']){
$product = array_column($_SESSION['cart'],'product_id');
$sql="SELECT * FROM product";
$query=mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_assoc($query)){
	foreach($product as $pid){
		if($row['prod_id']==$pid){
			Table($row['prod_image'],$row['prod_name'], $row['prod_price'], $row['prod_id']);
			$total = $total + (int)$row['prod_price'];
		}

       }

     }
 }


?>
</table></div></div></div></body>


				
</html>