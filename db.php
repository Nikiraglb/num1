<?php
 $servername = "localhost";
 $username = 'root';
 $password = '';
 $dbname = 'register';

 session_start();

 $data = mysqli_connect($servername, $username, $password, $dbname);

 if($data===false)
{
	die("connection error");
}

 ?>