<?php
$conn=mysqli_connect('localhost','root','','elect_db');
if(isset($_POST['save'])){
    $prod_name= $_POST['prodname'];
     $prod_price= $_POST['prodprice'];
     $prod_descr= $_POST['descr'];
    $filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];
    $folder = "./product_images/" . $filename;


 if(empty($prod_name)||empty($prod_price)||empty($prod_descr)||empty($folder))
    {
        $error="FILL ALL FIELD";
    }
    else{  

    $sql="INSERT INTO product(prod_id,prod_name,prod_price,prod_image,prod_descript)
                       VALUES('NULL','$prod_name','$prod_price','$folder','$prod_descr')";
    $query=mysqli_query($conn,$sql);
    if( $query){
        header("location:product_list.php");
    }else{die(mysqli_erro($conn));}

    if (move_uploaded_file($tempname, $folder)) {
        $message = "<h3>  Image uploaded successfully!</h3>";
    } else {
        $message = "<h3>  Failed to upload image!</h3>";
    }
  }}

?>


<!Doctype html>
<html lang="en">
 <?php include 'header.php' ?>
<body class="n">

<!--incuding files-->
<?php 
include "sidenav.php";
include "topheader.php";
?>


<!--main container-->
      <main id="view-panel">
        <div class="container-fluid">
<div class="container">
        <div class="row ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                        <h4 class="text-success">Add Product</h4>
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
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="row py-5 mx-3">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label><h6>Product Name</h6></label>
                                <div class="form-group">
                                <input type="text" class="form-control" name="prodname" placeholder="Product Name">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                  <label><h6>Product Price</h6></label>
                                      <div class="form-group">
                                         <input type="text" class="form-control" name="prodprice" placeholder="Productprice">
                                     </div>
                            
                            </div>
                            
                        <div class="col-md-6">
                        <div class="form-group">
                            <label><h6>Product description</h6></label>
                                <div class="form-group">
                                <input type="text" class="form-control" name="descr" placeholder="description">
                                    </div>
                                </div>
                            </div>
                           
                                <div class="col-md-4">
                                <div class="form-group">
                                <label for="image"><h6>Attach image</h6></label>
                                 <input type="file" name="fileToUpload" class="form-control-file" id="image" >
                                 </div>
                             </div>
                             
                             

                             
                                 <div class="col-md-3">
                                    <input type="submit" class="btn btn-primary form-control" value="Save" name="save">
                                </div>
                            </div>
                        </form>
                    
            









    
</body>
</html>

                          

              
           
        



