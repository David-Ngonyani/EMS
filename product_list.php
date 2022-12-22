
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.css">
</head>
<body>
	<div class="container" style="margin-top:100px;"><h4>product list</h4>
   <div class="row"> <div class="col-md-3" style="margin:10px;"><button class="btn btn-primary px-3"><a href="adminadd.php">Add+</a></button></div></div>
<table class="table table-info">
  
    <tr>
      <th scope="col" class="table-warning">Id</th>
      <th scope="col" class="table-warning">Name</th>
      <th scope="col" class="table-warning">Price</th>
      <th scope="col" class="table-warning">Description</th>
      <th scope="col" class="table-warning">Operation</th>
    </tr>
    <?php
$conn=mysqli_connect('localhost','root','','elect_db');
$sql="SELECT * FROM product";
$query=mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_assoc($query)){
		echo " <tr>
      
      <td>". $row['prod_id']."</td>
      <td>". $row['prod_name']."</td>
      <td>". $row['prod_price']."</td>
      
      <td>". $row['prod_descript']."</td>
      <td><button class='btn btn-primary'><a href='update.php?updateid=". $row['prod_id']."   class='text-light'>Update</a></button>
       <button class='btn btn-danger'><a href='delete.php?deleteid=". $row['prod_id']." class='text-light'> Delete </a></button>
       </td>

    </tr>";
}
  ?>

  
</table></div>
</body>
</html>