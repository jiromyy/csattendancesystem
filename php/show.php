
<!-- NEED TABLE FOR SHOWING RECORDS -- >

<?php

include('connectiondb.php')

 //displaying sql queries
$display = "SELECT id, name, FROM ";//querie varies depending on admin type
$data = $connection->query($display);

if($data->num_rows > 0)
{
    //Fetching Results -->
    while ($row = $data->fetch_assoc()) 
    {

    //Displaying Data from mysql 
    echo"<tr><td>".$row['sample_data']."</td><td>".$row['sample_data']."</td>";
    }
}	
else
{
    exit("no record");
}	

$connection->close();
?>