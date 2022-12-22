<?php


require_once('component.php');

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
	<div class="row">
		<div class="col">
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
<a href="adminadd.php"><i class="bx bx-grid-alt"> </i> 
<span class="links-name">Add Product</span>
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
</div></div>

<div class="container" style="background:#fff;">
<?php include 'header2.php';?>


	 <div class="row ">

<div class="row" style="margin-top:45px;">
	
	<h5 class="text-success">	Product List</h5>
</div>



<table class="table table-info" style="width:800px; color:black;">
  
    <tr>
      <th scope="col" class="table-warning">#</th>
      <th scope="col" class="table-warning">Product Name</th>
      <th scope="col" class="table-warning">Product image</th>
      <th scope="col" class="table-warning">Product Price</th>
      <th scope="col" class="table-warning">Description</th>
      <th scope="col" class="table-warning">Action</th>
    </tr>
    <?php
$conn=mysqli_connect('localhost','root','','elect_db');
$sql="SELECT * FROM product";
$query=mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_assoc($query)){
		echo " <tr>
      
      <td>". $row['prod_id']."</td>
      <td>". $row['prod_name']."</td>
      <td><img src=". $row['prod_image']."
      width='50px' height='50px'
      ></td>
      <td>". $row['prod_price']."</td>
      <td>". $row['prod_descript']."</td>
      <td><button class='btn btn-primary'><a href='update.php?updateid=". $row['prod_id']."   class='text-light' px-2>Update</a></button>
       <button class='btn btn-danger'><a href='delete.php?deleteid=". $row['prod_id']." class='text-decoration-none'>Delete </a></button>
       </td>

    </tr>";
}
		
	?>
		
		
		
		

</div></div>
</body>
</html>
