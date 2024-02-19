<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}

if (!$_SESSION['myrow']) {
	header("location:login.php");
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>THIS IS ADMIN HOME PAGE</h1><?php echo $_SESSION["username"] ?>

<a href="logout.php">Logout</a>
</body>
</html>