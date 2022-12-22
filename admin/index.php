<?php 
session_start();

?>









<!doctype html>
<html lang="en">

 
 <?php include 'header.php' ?>
  

    <?php
$conn=mysqli_connect('localhost','root','','elect_db');



?>
<body class="n">
<?php 
include "sidenav.php";
include "topheader.php";

?>
      <main id="view-panel">
        <div class="container">
		
            <?php 
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            include $page.'.php' ?>
          
        </div>
    </main>

  </body>

