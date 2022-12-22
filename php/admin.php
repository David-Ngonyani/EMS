<?php


require_once('component.php');

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>my first Responsive sidebar</title>
	<!-- icon link-->   
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="sidebar.css">
	<link rel="stylesheet"  href="css/bootstrap/css/bootstrap.css">

</head>
<body>
	<div class="container-sm">100% wide until small breakpoint</div>
	<div class="sidebar">
<div class="logo-content">
	<div class="logo">
		<i class="bx  bx-crown"></i>
		<div class="logo-name">KingDavid</div>
	   </div>
	<i class="bx bx-menu" id="btn"></i> 
     <ul class="nav-list">
          	<li> <i class='bx bx-search'></i>
          		<input type="text"  placeholder="Search">
	
	<!--<span class="tooltip">Dashboard</span>-->
   </li>

     		<li> 
<a href="#"><i class="bx bx-grid-alt"> </i> 
<span class="links-name">Dashboard</span>
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
</li>
     </ul>
</div>
</div>

<div class="container">
	

</div>
</body>
</html>
