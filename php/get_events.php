<?php
$org = $_SESSION['org'];
$query = "SELECT * FROM event INNER JOIN organization ON event.org_id = organization.org_id WHERE organization.org_id = '$org'";
$result = mysqli_query($connection, $query);
?>
