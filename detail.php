<?php 
session_start();
include 'db_conn.php';

if(isset($_POST["Add"])){
      echo $_POST['product_id'];
	if($_SESSION['cart']){
     $item_array_id=array_column($_SESSION['cart'],'product_id');
   // print_r($item_array_id);

if(in_array($_POST['product_id'],$item_array_id)){
}
}
	
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>for</title>
	<link rel="stylesheet"  href="new.css">
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>


</body>
</html>