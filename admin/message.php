


     <div class="container my-5" ><h4>Message list</h4>
        <div class="col-lg-12">
   <div class="row">
<table class="table table-info" style="width:900px; ">
  <tr>
      <th scope="col" class="table-warning">#</th>
      <th scope="col" class="table-warning"> Name</th>
      <th scope="col" class="table-warning"> Email</th>
      <th scope="col" class="table-warning">Phone</th>
      <th scope="col" class="table-warning">Message</th>
      <th scope="col" class="table-warning">date</th>
      <th scope="col" class="table-warning">Action</th>
    </tr>
    <?php
$conn=mysqli_connect('localhost','root','','elect_db');
$sql="SELECT * FROM contact";
$query=mysqli_query($conn,$sql);
    
    while($row = mysqli_fetch_assoc($query)){
        echo " <tr>
      
      <td class='text-light'>". $row['id']."</td>
      <td>". $row['name']."</td>
      <td>". $row['email']."</td>
      <td>". $row['phone']."</td>
      <td>". $row['message']."</td>
      <td>". $row['date']."</td>
      <td><a href='deletemsg.php?deleteid=". $row['id']." ><h5 class='text-light'>Delete </h5></a>
       </td>
    </tr>";
}
?>
</table>
</div>
        </div></div>

