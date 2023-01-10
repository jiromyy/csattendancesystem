<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 
 
 $servername = "localhost";
 $username = "root";
 $password = "";

//creating connection
$connection = new mysqli($servername,$username,$password);

//checking connection
if($connection->connect_error)
{
	die("Connection Failed: ". $connection->connect_error);
}	

echo "Connected successfully <br>";

//creating database

$sql = "CREATE DATABASE csattendancesystemDB";

if ($connection->query($sql) === TRUE)
{
	echo "Database created successfully";
}
else
{
	echo "Error creating database: ". $connection->error;
}

$connection->close();
 ?>
</body>
</html>