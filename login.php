<?php

require_once ('db.php');

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

	// $username = mysqli_real_escape_string($data, $username);
	// $password = mysqli_real_escape_string($data, $password);

	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:userhome.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:adminhome.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Login Form</h1>
	<br><br><br><br>
	<div >
		<br><br>
		<form action="#" method="POST">
	<div>
		<label>username</label>
		<input type="username" name="username" required>
	</div>
	<br><br>
	<div>
		<label>password</label>
		<input type="password" name="password" required>
	</div>
	<br><br>
	<div>
		<input type="submit" value="Login">
	</div>
	</form>
	<br><br>
 </div>
 
</body>
</html>

	







