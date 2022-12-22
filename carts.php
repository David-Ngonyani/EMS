<?php
session_start();
include 'db_conn.php';
include 'component.php' ;
if(isset($_POST['remove'])){
	if($_GET['action']== 'remove'){
		foreach($_SESSION['cart'] as $key => $value){
		if ($value["product_id"]==$_GET['id']) {
				unset($_SESSION['cart'][$key]);
				echo "<script>alert('product has been removed')</script";
				echo "<script>window.location='store.php'</script";
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
	<title></title>
	<link rel="stylesheet"  href="new.css">
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
	<div class="container">
		<?php include 'header2.php';?>
		
<div class="row " style=" background: linear-gradient(90deg,gray,white);">
	<div class="col-md-7">
		<div class="shopping-cart">
			<h4 class="text text-light">My cart</h4>
			<hr>
			<?php 
			$_SESSION['total'] =0;
			if($_SESSION['cart']){
$product = array_column($_SESSION['cart'],'product_id');
$sql="SELECT * FROM product";
$query=mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_assoc($query)){
	foreach($product as $pid){
		if($row['prod_id']==$pid){
			Cartproduct($row['prod_image'],$row['prod_name'], $row['prod_price'], $row['prod_id']);
			$_SESSION['total'] = $_SESSION['total'] + (int)$row['prod_price'];
		}

       }

     }
 }else{
 	echo"<h5>Cart is Empty.";
 }
				?>			
</div></div>
			
<div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
	<div class="pt-4">
		<h6>PRICE DETAIL</h6>
		<hr>
		<div class="row price-details">
			<div class="col-md-7">
				<?php
				if(isset($_SESSION['cart'])){
					$count=count($_SESSION['cart']);
					echo "<h6>Price($count item)</h6>";
				}else{
					echo "<h6>Price(0 item)</h6>";
				}
  
             ?>

        <h6>Delivery Charges</h6>
        <hr>
        <h6>Amount Payable</h6>
        <h6><button class="btn btn-warning my-3"><a href="store.php">Continue shopping</a></button>
              
			</div>
			<div class="col-md-5">
				<h6>Tshs :<?php echo $_SESSION['total']; ?></h6>
				<h6 class="text-success">FREE</h6>
				<hr>
				<h6>Tshs :<?php echo $_SESSION['total']; ?></h6>
				<h6><a href="payment.php"><button  class="btn btn-primary my-3">CHECK OUT</button></a></h6>
			</div>
</div>

		</div>

</div>
</div>
</div>
</body>
</html>