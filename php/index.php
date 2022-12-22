<?php 
//require_once('./php/connectDb.php');
require_once('./php/component.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>G37 Electronic</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.css">
	
<style type="text/css">
	
	.reg-custom  {

		text-decoration: none;
		float: right;


	}
	.reg-custom ul li{
		display: inline;
		float: right;
	}
</style>





</head>
<body style="background:linear-gradient(90deg, white, yellow);">
	<?php require_once('php/header.php');?>
<h1>welcome shopping cart</h1>
<div class="container">
	<div class="left">
<h2></h2>
<br>
<div class="fakeimg">
  <video controls="controls" width="300px" height="200px">
    <source src="videos/mb.webm" type="video/webm">
    <source src="media/shuttle.ogv" type="video/ogg">
</video></div>
<section1 style="color: blue ; font-family:cursive;">Mboso-New official videso song</section1>
<div class="fakeimg" style="margin-top:20px" ;>
  <video controls="controls" width="300px" height="200px">
    <source src="videos/Alan Walker - Force.mp4" type="video/mp4">
    <source src="media/shuttle.ogv" type="video/ogg">
</video>
</div>
<section style="color: blue ; font-family:cursive;">Alan Walker-New official videso song</section>

<div class="link">
    <section>watch more videos</section>
    <br>
<button><a href="#">Previous</a></button>
<button><a href="#">1</a></button>
<button><a href="#">2</a></button>
<button><a class="page-link" href="#">Next</a></button>
  </div></div>

<div class="center" >
	<h3></h3>
	<div class="image">
		<!-- partial:index.partial.html -->
    <input id="sliderSwitch" class="slider__switch" type="checkbox" name="sliderSwitch" hidden />

  <div class="slider">
    <ul class="slider__list">
   <li class="slider__slide"><img src="images/kdplay.jpg" alt="Slide image number 4 with mountain climber" /></li>    
<li class="slider__slide"><img src="images/david.jpg" alt="Slide image number 2 with Golden Gate Bridge" /></li>           
<li class="slider__slide"><img src="images/range0.png" alt="Slide image number 3 with Flatiron Building in New York" /></li>
<li class="slider__slide"><img src="images/crown1.jpg" alt="Slide image number 1 with plane" /></li>
    </ul>
  </div>
<div class="slider__control">
  <label for="sliderSwitch"></label>
  </div></div></div>


<div class="right">
	<section style="color: blue;">Date:<?php echo"$date"?></section>
</div>
	<div class="row text-center py-5">
		<?php
		Component("Huawei p30", 380000,"./image/huawei p30.jpg");
		Component("Infinix Zero8", 480000,"./image/Infinix-Zero-8.jpg");
		Component("Oppo F16-Pro 6", 480000,"./image/oppof16pro6.jpg");
		Component("Samsung S10", 480000,"./image/SamsungS10.jpg");
		Component("Samsung S10", 480000,"./image/SamsungS10.jpg");
		Component("Oppo F16-Pro 6", 480000,"./image/oppof16pro6.jpg");
		Component("Samsung S10", 480000,"./image/SamsungS10.jpg");
		Component("Samsung S10", 480000,"./image/SamsungS10.jpg");


		?>

</div>
</div>



<script source="css/bootstrap/js/bootstrap.js"></script>
</body>
</html>