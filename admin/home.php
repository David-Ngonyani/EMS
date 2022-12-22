<div class="col-lg-12">
	<div class="row">
		<div class="card card-stats col-md-3 bg-primary">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-white mb-0">Total Customers</h5>
                  <span class="h2 font-weight-bold mb-0 text-white float-right"><?php $sql="SELECT cust_id FROM customer ORDER BY cust_id DESC LIMIT 1";
$query=mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($query)){
       echo $_SESSION['id']=$row['cust_id'];
   }else{
    echo "0";
   }
?></span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
                  </div>
                </div>
              </div>
             <span class='stat-icons'><i class="fa fa-users"></i></span>
            </div>
      	</div>
      	<div class="ml-4 card card-stats col-md-3 bg-warning">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-white mb-0">Messages</h5>
                  <span class="h2 font-weight-bold mb-0 text-white float-right">
                   
                    <?php 

$conn=mysqli_connect('localhost','root','','elect_db');
 $sql_message="SELECT id FROM contact ORDER BY id DESC LIMIT 1";
$query_no_message=mysqli_query($conn,$sql_message);
$rowmsg=mysqli_num_rows($query_no_message);
if($rowmsg> 0){
  $result= mysqli_fetch_assoc($query_no_message);
       echo $_SESSION['id']=$result['id'];
   }


   

?></span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class='bx bx-chat'></i> 
                  </div>
                </div>
              </div>
             <span class='stat-icons'><i class="fa fa-tags"></i></span>
            </div>
      	</div>
      	<div class="ml-4 card card-stats col-md-3 bg-info">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-white mb-0">Categories</h5>
                  <span class="h2 font-weight-bold mb-0 text-white float-right"><?php $squery_lastid=mysqli_query($conn,"SELECT prod_id FROM product ORDER BY prod_id DESC LIMIT 1");
             if($row = mysqli_fetch_assoc($squery_lastid)){
        echo $_SESSION['productId']=$row['prod_id'];
   }else{
    echo "0";
   }?>
                  </span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
                  </div>
                </div>
              </div>
             <span class='stat-icons'><i class="fa fa-list"></i></span>
            </div>
      	</div>
	</div>
</div>