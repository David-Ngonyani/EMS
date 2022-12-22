<!doctype html>
<html lang="en">

 
 <?php include 'header.php' ?>
  

    


<body class="n">


      <main id="view-panel">
        <div class="container-fluid">
          <div class="col-lg-12">
  <div class="row">
    <div class="card card-stats col-md-3 bg-primary">
            <!-- Card body -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-white mb-0">Total Subscribers</h5>
                  <span class="h2 font-weight-bold mb-0 text-white float-right"><?php echo mysqli_num_rows(mysqli_query($con,"select * from email_info")) ?></span>
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
                  <h5 class="card-title text-uppercase text-white mb-0">Brands</h5>
                  <span class="h2 font-weight-bold mb-0 text-white float-right"><?php echo mysqli_num_rows(mysqli_query($con,"select * from brands")) ?></span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class="ni ni-active-40"></i>
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
                  <span class="h2 font-weight-bold mb-0 text-white float-right"><?php echo mysqli_num_rows(mysqli_query($con,"select * from categories")) ?></span>
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
    
            
        </div>
    </main>

  </body>

<script type="text/javascript">
  
  window.start_load = function(){
    $('body').append('<div id="preloader2"></div>');
  }
  window.end_load = function(){
    $('body #preloader2').remove();
  }
</script>