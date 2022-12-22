<?php
session_start();
$conn=mysqli_connect('localhost','root','','elect_db');
$sql="SELECT cust_id FROM customer ORDER BY cust_id DESC LIMIT 1";
$query=mysqli_query($conn,$sql);

if($row = mysqli_fetch_assoc($query)){
        echo "

       <h1>". $row['cust_id']."</h1>";
   }

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="new.css">
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
	</title>
</head>
<body>
	 <div class="container my-5" ><h4>Customer list</h4>
        <div class="col-lg-12">
   <div class="row">
<table class="table table-info" style="width:900px; ">
  <tr>
  	<th scope="col" class="table-warning"><h5>#</h5></th>
      <th scope="col" class="table-warning"><h6>Full Name</h6></th>
      <th scope="col" class="table-warning"><h6>Email</h6></th>
      <th scope="col" class="table-warning"><h6>City</h6></th>
      <th scope="col" class="table-warning"><h6>Addres</h6></th>
      <th scope="col" class="table-warning"><h6>Country</h6></th>
      <th scope="col" class="table-warning"><h6>Action</h6></th>
    </tr>
    <?php
$conn=mysqli_connect('localhost','root','','elect_db');
$sql="SELECT * FROM customer";
$query=mysqli_query($conn,$sql);
    
    while($row = mysqli_fetch_assoc($query)){
        echo " <tr>
        <td>". $row['cust_id']."</td>
         <td>". $row['cust_name']."</td>
      <td>". $row['email']."</td>
      <td>".$row['city']."</td>
      <td>". $row['addres']."</td>
      <td>". $row['country']."</td>
    <td>
       <button class='btn  btn-sm btn-danger'><a href='deletcust.php?deleteid=". $row['cust_id']." class='text-decoration-none'>Delete </a></button>
       </td>
    </tr>";
}
        
    ?>
</table>
</div>
        </div>

</body>
</html>