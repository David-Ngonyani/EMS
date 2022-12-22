<?php 
$conn=mysqli_connect('localhost','root','','elect_db');
if (isset($_POST['save'])) {
	 $name=$_POST['name'];
	 $adress=$_POST['addres'];
	 $password=$_POST['pass1'];
	 $Confirmpassword=$_POST['pass2'];
	 $email=$_POST['email'];
	 $city=$_POST['city'];
	 $country=$_POST['country'];

if (empty($name)) {
		$error = "Name must not be empty !";
	} elseif (empty($adress)) {
		$error = "address must not be empty !";
	} elseif (empty($password)) {
		$error = "password field must not be empty !";

	} elseif ($password !== $Confirmpassword) {
		$error = "password not match !";

	} elseif (empty($Confirmpassword)) {
		$error = "password field must not be empty !";

	}  elseif (empty($email)) {
		$error = "email field must not be empty !";

	} elseif (empty($city)) {
		$error = "city field must not be empty !";

	}  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error = "Invalid Email Address !";
	}  elseif (empty($country)) {
		$error = "Country field must not be empty !";

	} else {


   $sql="INSERT INTO customer (cust_id,cust_name,addres,email,password,city,country)
       VALUES('','$name','$adress','$email','$password','$city','$country')";

$query=mysqli_query($conn,$sql);
     
     if ($query) {
     	
$message= "succesful registered ";

     }
     else{
     	$message ="Fail to register account..!";
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
	<div class="container" style="background:#fff; height:100;">
<?php include 'header3.php';?>

	<div class="container" style="padding: 10px; margin-left: 100px;">
		<div class="row py-3">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
						<h5>REGISTER NEW ACCOUNT</h5>
					</div>

					<?php 
				if (isset($error)) {
					echo "<span class='text-center text-danger'><h5>$error..!</h5></span>";
				}

				if (isset($message)) {
					echo "<span class='text-center text-succes'><h5>$message...!</h5></span>";
				}


				?>
				
					
					<form action="#" method="post" style="margin-left:10px;padding: 10px;" enctype="multipart/form-data">
						<div class="row">
						<div class="col-md-6">
						<div class="form-group">
							<label> Name</label>
								<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name">
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
								  <label>Address</label>
									  <div class="form-group">
										 <input type="text" class="form-control" name="addres" placeholder="Address">
								     </div>
							</div>
							</div>

							<div class="row ">
						<div class="col-md-6">
						<div class="form-group my-1">
							<label>Password</label>
								<div class="form-group">
								<input type="password" class="form-control" name="pass1" placeholder="password">
									</div>
								</div>
							</div>
							
							<div class="col-md-6">
						<div class="form-group">
							<label>Email:</label>
								<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="email">
									</div>
								</div>
							</div></div>

							<div class="row ">
							<div class="col-md-6">
						<div class="form-group">
							<label>confirm password:</label>
								<div class="form-group">
								<input type="password" class="form-control" name="pass2" placeholder="password">
									</div>
								</div>
							</div>

							<div class="col-md-6">
						<div class="form-group">
							<label>City</label>
								<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="city">
									</div>
								</div>
							</div></div>

                                   <div class="row py-2">
							<div class="col-md-6">
						<div class="form-group">
							<label>Country</label>
								<div class="form-group">
								<input type="text" class="form-control" name="country" placeholder="country">
									</div>
								</div>
							</div></div>
                             

                             
                             <div class="row py-3">
                                 <div class="col-md-3">
									<input type="submit" class="btn btn-primary form-control" value="Save" name="save">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div></div>










</body>
</html>
	
	