<?php


include('connectiondb.php')

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
    //variables for inserting new records
    $name = test_input()
    
 	//sql query for adding record
	$sql = "INSERT INTO student()
	VALUES ('')";

	if($connection->query($sql) === TRUE)
	{
		echo '<script type="text/javascript">
			  alert("Record Added!");
			  window.location.href = "adminindex.php";
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
