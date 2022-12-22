
<?php 
	$conn=mysqli_connect('localhost','root','','elect_db');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
  	$email=$_POST['email'];
   $contact=$_POST['contact'];
	$message=$_POST['message'];
		


	if (empty($name)) {
		$error = "Name must not be empty !";
	} elseif (empty($email)) {
		$error = "Email must not be empty !";
	} elseif (empty($contact)) {
		$error = "Contact field must not be empty !";

	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Invalid Email Address !";
	} elseif (empty($message)) {
		$error = "Subject field not be empty !";

	} else {

		$sql="INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES (NULL, '$name', '$email', '$contact', '$message', current_timestamp())";
		 $query =mysqli_query($conn,$sql);
 if (!$query) {
 	$message="data not inserted";
 }else{
 	$message= "data insert succesfull";

		
 }



  }}


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
<body>
	<div class="container" style="background:#fff;">
		<?php include 'header3.php';?>
		<div class="row mx-5">
			<div class="row ">
				<div class="col-md-11 ">
                  <h4 class="text-danger">Live Support</h4>
  				    <p><span class="text-primary">24 hours | 7 days a week | 365 days a year &nbsp;&nbsp; Live Technical Support</span></p>
  				 </div>
  				 </div>
  				   			
  			<div class="col-md-5 border rounded">
				  	<h4>Contact Us</h4>
				  	  <?php 
				if (isset($error)) {
					echo "<span style = 'color:red'>$error</span>";
				}

				if (isset($message)) {
					echo "<span style = 'color:green'>$message</span>";
				}


				?>
					    <form action="" method="post">
					    	<div class="form-group my-2">
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="name" value="" class="form-control"></span>
						    	</div>
						    <div><div class="form-group my-2">
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="text" name="email" value="" class="form-control"></span>
						    </div>
						   
						   <div class="form-group my-2">
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="contact" value="" class="form-control"></span>
						    </div>
						    
						    <div class="form-group my-2">
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="message" class="form-control"> </textarea></span>
						    </div>
						  
						   <div class="form-group">
						   		<span><button type="submit" name="submit" class="btn btn-primary my-3"  >Submit</button></span></div>
						  </div>
					    </form>

			</div>
		
         <div class="col-md-7 bg-light border rounded ">
      			<div class="company_address">
				     	<h5 class="text-center"></h5>
				     	<div class="image"><img src="admin/product_images/contact.png">
						    	<h5>Mzumbe University</h5>
						   		<p>Morogoro,
						   		Tanzania</p>

						    
				   		<p>Mobile:0674175936</p>
				   		
				 	 	<p>Email: <span>group37@gmail.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				 </div>






			</div>
		</div>
		
				
 </div>
</div>
</body>
</html>



