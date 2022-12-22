<?php
//session_start();
$conn=mysqli_connect('localhost','root','','elect_db');

?>


	 <div class="container my-5" ><h4>Customer list</h4>
        <div class="col-lg-12">
   <div class="row">
<table class="table table-info border rounded" style="width:900px; ">
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