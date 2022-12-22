<?php
$conn=mysqli_connect('localhost','root','','elect_db');
if(isset($_GET['deleteid'])){
	$id =$_GET['deleteid'];


$sql="DELETE FROM product WHERE prod_id ='$id' ";
$query =mysqli_query($conn,$sql);

if($query){
	echo " Deleted Succesfully";
	header("location:index.php");
}else{
	die(mysqli_error($conn));
}

}

?>