
<?php
$conn=mysqli_connect('localhost','root','','elect_db');
if(isset($_POST['update'])){
	$id=$_GET['updateid'];
	$prod_name= $_POST['prodname'];
	 $prod_price= $_POST['prodprice'];
	 $prod_descr= $_POST['descr'];
    $filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];
    $folder = "./product_images/" . $filename;


    $sql="UPDATE product SET prod_id ='$id', prod_name ='$prod_name',prod_price=' $prod_price',prod_image='$folder',prod_descript='$prod_descr' WHERE prod_id = '$id' ";
                       
    $query=mysqli_query($conn,$sql);

     if ($query){
     header("location:product_list.php");
     }
     else{
     	die(mysqli_error($conn));
     }


}


?>


<!doctype html>
<html lang="en">

 
 <?php include 'header.php' ?>
  

    <?php
$conn=mysqli_connect('localhost','root','','elect_db');



?>
<body class="n">
<?php 
include "sidenav.php";
include "topheader.php";

?>
      <main id="view-panel">    
	<div class="container" style="padding: 10px;">
		<div class="row py-3">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
						<h4>Update Product</h4>
					</div>
					<div class="card-body">
						<?php if(!empty($error)){
							echo '
                         <div class="error">
                              <h2>'. $error .'</h2>
                              </div>';
                            }
                           if(!empty($message)){
	                           echo '
                            <div class="message">
                              <h3>'. $message .'</h3>
                              </div>';
                          }?>
          <form action="#" method="post"  enctype="multipart/form-data">
						
						<div class="col-md-6">
						<div class="form-group">
							<label>Product Name</label>
								<div class="form-group">
								<input type="text" class="form-control" name="prodname" placeholder="Product Name" required="">
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								  <label>Product Price</label>
									  <div class="form-group">
										 <input type="text" class="form-control" name="prodprice" placeholder="Productprice" required="">
								     </div>
							</div>
							</div>
							
						<div class="col-md-6">
						<div class="form-group">
							<label>Product description</label>
								<div class="form-group">
								<input type="text" class="form-control" name="descr" placeholder="description" required="">
									</div>
								</div>
							</div>


					
							
								<div class="col-md-4">
								<div class="form-group">
                                <label for="image">Attach image</label>
                                 <input type="file" name="fileToUpload" class="form-control-file" id="image"  required="">
                                 </div>
                             </div>
                            
                  
                             
                                 <div class="col-md-3">
									<input type="submit" class="btn btn-primary form-control" value="Update" name="update">
								</div>
							</div>
						</form>
					

    </main>

  </body>
































</html>
