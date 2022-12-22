<?php require_once('component.php');  ?>



     <div class="container my-5" ><h4>product list</h4>
        <div class="col-lg-12">
   <div class="row">
<table class="table table-info" style="width:900px; ">
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
      
      <td class='text-light'>". $row['prod_id']."</td>
      <td>". $row['prod_name']."</td>
      <td><img src=". $row['prod_image']."
      width='60px' height='60px'
      ></td>
      <td>". $row['prod_price']."</td>
      <td>". $row['prod_descript']."</td>
      <td><button class='btn btn-primary'><a href='update.php?updateid=". $row['prod_id']."   class='text-light' px-1>Update</a></button>
       <button class='btn  btn-danger'><a href='delete.php?deleteid=". $row['prod_id']." class='text-decoration-none'>Delete </a></button>
       </td>
    </tr>";
}
$squery_lastid=mysqli_query($conn,"SELECT prod_id FROM product ORDER BY prod_id DESC LIMIT 1");
if($row = mysqli_fetch_assoc($squery_lastid)){
        $_SESSION['productId']=$row['prod_id'];
   }else{
    echo "0";
   }

        
    ?>
</table>
</div>
        </div>
    </main>
  </body>
  </html>

