<?php
require_once ('db.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO `login` (username, password) VALUES ('$username', '$password')";


 if ($data -> query($sql) === TRUE){
    echo "Успешная регистрация";
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
 <a href="logout.php">Logout</a>
 </body>
 </html>