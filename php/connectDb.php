<?php
$servername="localhost";
$username="root";
$password="";
$dbase="Oms";

//connection
$conn=mysqli_connect($servername, $username, $password, $dbase);

//check conn
if(!$conn)
{
	die("Connection fail");
}
else{
	echo "Connected";
}




?>