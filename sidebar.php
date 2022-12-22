<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="sidebar.css">
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.css">
	<title></title>
<style type="text/css">
	




.sidebar{
	
	
	height: 100%;
	width: 250px;
	font-size: 17px;
	background: linear-gradient(90deg, #765546,#A87943);
	padding: 10px 5px;
}
.sidebar .logo-content .logo{
	 color: #fff;
	 display: flex;
	 height: 50px;
	 width: 100%;
	 align-items: center;

}
.logo-content .logo i{
	font-size: 28px;
	margin-right: 5px;
	background: #fff;

}

.logo-content .logo .logo-name{
	font-size: 20px;
	font-weight: 430px;
}
.sidebar #btn{ 
 position: absolute;
 color: #fff;
 left: 90%;
 top: 5px;
 font-size: 20px;
 height: 50px;
 width: 50px;
 text-align: center;
 line-height:50px ;
 }
.sidebar ul{
	margin-top: 20px;

}

.sidebar ul li{
	position: relative;
	height: 50px;
	width: 100%;
	margin: 0 5px;
	list-style: none;
	line-height: 50px;
	
}

.sidebar ul li input{
 position: absolute;
 height: 90%;
 width: 90%;
 left: 10;
 top: 0;
 outline: none;
 border: none;
 background: none;

 font-size: 16px;
 color: #fff;
}


.sidebar ul li a{
   display: flex;
   color: #fff;
   align-items: center;
   text-decoration: none;
  

}
.sidebar ul li .bx-search{
	position: relative;
	z-index: 99;
	color: #fff;
	font-size: 22px;
	

}

.sidebar ul li a:hover{
 color:#11101d ;
 background:#fff ;
}

.sidebar ul li a i{
	height: 50px;
	min-width: 50px;
	border-radius: 12px;
	line-height: 50px;
}

 



 	.sidebar .image{
 		width: 45px;a
 		height: 45px;
 		border-radius: 50%;
 	}









</style>














</head>
<body>
<div class="container-fluid" style="background:yellow;">
	<div class="row">
	<div class="col-md-5">
	<div class="row" style="background: blueviolet;">
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
</li></ul>
     
</div>
</div></div>

	<div class="col-md-6">DAVID NGONYANI</div>






</div>
</body>
</html>