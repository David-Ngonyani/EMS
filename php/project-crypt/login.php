<?php


$conn=mysqli_connect('localhost','root','','logform');

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$username =$_POST["user"];
	$password =$_POST["pass"];



$sql="SELECT * FROM login WHERE username = '$username' AND password = '$password'";
$query=mysqli_query($conn,$sql);
$row =mysqli_fetch_array($query);

if($row['usertype']=="user"){
	echo "user";
}
 
else if($row['usertype']=="admin"){
	echo "admin";
}

}

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head> 
<body>
	<center>
		<h1>LOGIN FORM</h1>
		<br><br><br>
		<div style="background: lightgray; width: 500px;">
	<div>
		<form action="#" method="post">
<label>username</label>
<input type="text" name="user" placeholder="USERNAME" required="">
</div>
<br><br>
	<div>
<label>password</label>
<input type="password" name="pass" placeholder="Password" required="">
</div>
<br><br>
	<div>
<input type="submit" name="login" value="login">
</div>
</form></div>
<br><br>
</center>
</body>
</html>