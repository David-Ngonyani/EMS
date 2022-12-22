


<header id="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">
              <h3 class="px-5">
                <i class="far-crown">G37 Electronics</i>
                </h3>
            </a>


       <div class="collapse navbar-collapse" style="margin-left:500px;">
          <div class= "mr-auto"></div>
           <div class="navbar-nav"><a href="cart.php" class="nav-item nav-link active"><h5 class=" cart"><i  class="fas fa-shopping-cart"></i>cart

            <?php
              
            if(isset($_SESSION['cart'])){
              $count =count($_SESSION['cart']);
              echo "<span id='cart-count' class='text-warning bg-red'>($count)</span>";
            }else{
              echo "<span id='cart-count' class='text-warning bg-red'>(0)</span>";
            }
?>


           </h5></a></div>
  
  <div class="drop_down" style="float:right;">
    <button class="drop_btn"><h6>My Account<span style="margin-left:10px;"><i class="fa fa-user"></i></span></h6>
    </button>
    <div class="drop_down-content">
      <a href="login.php">Login</a>
      <a href="register.php">register</a>
    </div>
  </div> 
</div>
  </nav>
        </header>

<div class="content-wrapper">
  <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
   <a href="#"><button class="btn btn-primary"><h6>HOME</h6></button></a>
  <a href="contact.php"> <button class="btn btn-secondary" ><h6>CONTACT US</h6></button></a>
  </div></nav>


         



</div>