<?php

include('connectiondb.php')

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$ID = test_input($_POST['ID']);

 	//sql query for delete
	$sql = "DELETE FROM  WHERE id = '$ID' ";

	if($connection->query($sql) === TRUE)
	{
		echo '<script type="text/javascript">
			  alert("Record Deleted!");
			  window.location.href = "admindelete.php";
			  </script>';

	}
	else
	{
		echo "Error: ". $sql. "<br>". $connection-> error;
	}
}


//removing uncessary event in the input
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
} 

$connection->close();
 ?>
