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
		$error="<h4> Please Fill all fields </h4>";
	}
	else{  

    $sql="INSERT INTO product(prod_id,prod_name,prod_price,prod_image,prod_descript)
                       VALUES('NULL','$prod_name','$prod_price','$folder','$prod_descr')";
    $query=mysqli_query($conn,$sql);
    if( $query){
    	header("location:admin.php");
    }else{die(mysqli_erro($conn));}

    if (move_uploaded_file($tempname, $folder)) {
        $message = "<h3>  Image uploaded successfully!</h3>";
    } else {
        $message = "<h3>  Failed to upload image!</h3>";
    }
  }}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>my first Responsive sidebar</title>
	<!-- icon link-->   
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="sidebar.css">
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.css">

</head>
<body>
	<div class="sidebar">
<div class="logo-content">
	<div class="logo">
		<i class="bx  bx-crown"></i>
		<div class="logo-name"><h6>G37 Electronics</h6></div>
	   </div>
	<i class="bx bx-menu" id="btn"></i> 
     <ul class="nav-list">
          	<li> <i class='bx bx-search'></i>
          		<input type="text"  placeholder="Search">
	
	<!--<span class="tooltip">Dashboard</span>-->
   </li>

     		<li> 
<a href="#"><i class="bx bx-grid-alt"> </i> 
<span class="links-name">Dashboard</span>
</a>
<!--<span class="tooltip">Dashboard</span>-->
</li>

	<li> 
<a href="#"><i class='bx bx-user'></i> 
<span class="links-name">User</span>
</a>
<!--<span class="tooltip">Dashboard</span>-->
</li>

	<li> 
<a href="#"><i class='bx bx-chat'></i> 
<span class="links-name">Messages</span>
</a>
<!--<span class="tooltip">Dashboard</span>-->
</li>
	<li> 
<a href="#"><i class='bx bx-pie-chart'></i>
<span class="links-name">Analytics</span>
</a>
<!--<span class="tooltip">Dashboard</span>-->
</li>

	<li> 
<a href="#"><i class='bx bxs-folder'></i>
<span class="links-name">File manager</span>
</a>
<!--<span class="tooltip">Dashboard</span>-->
</li>


	<li> 
<a href="#"><i class='bx bxs-log-out'></i>
<span class="links-name">Logout</span>
</a>
<!--<span class="tooltip">Dashboard</span>-->
</li>

<li> 
<a href="#"><i class='bx bxs-cog'></i>
<span class="links-name">setting</span>
</a>
<!--<span class="tooltip">Dashboard</span>-->
</li>
     </ul>
</div>
</div>

<div class="container" style="background:linear-gradient(90deg,gray,white);">


<?php include 'header2.php';?>

		<div class="row py-3">
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
						<div class="row py-5 mx-5" style="background:linear-gradient(90deg,white,lightblue);">
						<div class="col-md-6">
						<div class="form-group">
							<label><h6>Product Name</h6></label>
								<div class="form-group">
								<input type="text" class="form-control" name="prodname" placeholder="Product Name">
									</div>
								</div>
							</div>
							<div class="row py-3">
							<div class="col-md-6">
								  <label><h6>Product Price</h6></label>
									  <div class="form-group">
										 <input type="text" class="form-control" name="prodprice" placeholder="Productprice">
								     </div>
							</div>
							</div>
							<div class="row py-2">
						<div class="col-md-6">
						<div class="form-group">
							<label><h6>Product description</h6></label>
								<div class="form-group">
								<input type="text" class="form-control" name="descr" placeholder="description">
									</div>
								</div>
							</div>
							<div class="row py-3">
								<div class="col-md-4">
								<div class="form-group">
                                <label for="image"><h6>Attach image</h6></label>
                                 <input type="file" name="fileToUpload" class="form-control-file" id="image" >
                                 </div>
                             </div>
                             </div>
                             

                             
                             <div class="row py-3">
                                 <div class="col-md-3">
									<input type="submit" class="btn btn-primary form-control" value="Save" name="save">
								</div>
							</div>
						</form>
					
				









	
</body>
</html>

                          

