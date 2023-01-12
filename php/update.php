<?php


include('connectiondb.php')

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$ID = test_input($_POST['id']);
	$username = test_input($_POST['name']);
 	$somedata = test_input($_POST['']);

 	//sql query for update
	$sql = "UPDATE menu SET id = '$ID',name ='$name', ='$' WHERE id = '$ID' ";

	if($connection->query($sql) === TRUE)
	{
		echo '<script type="text/javascript">
			  alert("Record Updated!");
			  window.location.href = "adminupdate.php";
			  </script>';
	}
	else
	{
		echo "Error: ". $sql. "<br>". $connection-> error;
	}
}

//removing uncessary datas in the input
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
} 

$connection->close();

?>