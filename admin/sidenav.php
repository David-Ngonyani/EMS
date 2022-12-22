
  <nav id="sidebar" class='mx-lt-5 bg-primary' style="">
  <div class="container-fluid" style="padding: 0">
    
    <div class="sidebar-list">
            <a class="nav-item nav-home" href="index.php?page=home">
              <i class="fa fa-tachometer-alt"></i>
              Dashboard
            </a>
        
            
        
        
            <a class="nav-item nav-productlist" href="index.php?page=prod_list">
              <i class="fa fa-list nav-productlist"></i>
              Product List
            </a>
            <a class="nav-item nav-orders" href="index.php?page=addprod">
             <i class="bx bx-grid-alt"> </i> 
              Add Product
            </a>
            <a class="nav-item" href="index.php?page=Message">
             <i class='bx bx-chat'></i> 
              Messages
            </a>
            
            <a class="nav-item nav-adduser nav-edituser nav-manageuser" href="index.php?page=manageuser" >
              <i class="fa fa-users"></i>
                Users
              </a>
            </div>
          
        
        
        
        
        
            
    </div>

  </div>
</nav>

<script>
  if('<?php echo isset($_GET['page']) ?>' == 1)
    $('.nav-<?php echo $_GET['page'] ?>').addClass('active')
</script>
    
    