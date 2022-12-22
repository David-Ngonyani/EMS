<?php
session_start();
include 'db_conn.php';
include 'component.php';


if(isset($_POST["Add"])){
      // $_POST['product_id'];
	if($_SESSION['cart']){
     $item_array_id=array_column($_SESSION['cart'],'product_id');
   // print_r($item_array_id);

if(in_array($_POST['product_id'],$item_array_id)){
	echo "<script>alert('product is already added in the cart...!')</script>";
	echo"<script>window.location='index.php'</script>";

}else{
  $count = count($_SESSION['cart']);
  $item_array = array('product_id'=>$_POST['product_id']);
  $_SESSION['cart'][$count]=$item_array;
}


	}else{
		$item_array = array('product_id' =>$_POST['product_id']);

	//Create new session variable
	$_SESSION['cart'][0]= $item_array;	
	//print_r($_SESSION['cart']);
       }
	
}
	?>


<!DOCTYPE html>
<html>
<head><title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>electronic shop</title>
	<link rel="stylesheet"  href="new.css">
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

	</head>

<body>
	<div class="container" style="background:#fff; height: 100%;">
		<?php
		include 'header.php';
		
		?>
		<div class="container">
<?php include 'slider.php';?>


<div class="row text-center border rounded">
<div style="border:1px solid gray;padding:10px;" class=" border rounded ">
	<h5 class="text-primary text-center">FEATURE PRODUCTS</h5></div>

			<?php
 $conn=mysqli_connect('localhost','root','','elect_db');
			$sql="SELECT * FROM product";
$query=mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_assoc($query)){
	Component($row['prod_name'], $row['prod_price'], $row['prod_image'],$row['prod_descript'],$row['prod_id']);


	}

?>
</div>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>