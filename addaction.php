<?php
$conn=mysqli_connect('localhost','root','','elect_db');
if(isset($_POST['save'])){
	$prod_name= $_POST['prodname'];
	 $prod_price= $_POST['prodprice'];
	 $prod_descr= $_POST['descr'];
    $filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];
    $folder = "./product_images/" . $filename;

    $sql="INSERT INTO product(prod_id,prod_name,prod_price,prod_image,prod_descript)
                       VALUES('NULL','$prod_name','$prod_price','$folder','$prod_descr')";
    $query=mysqli_query($conn,$sql);

    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
  }

?>