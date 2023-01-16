<?php
$query = "SELECT * FROM `user` INNER JOIN `organization` on user.org_id = organization.org_id";
$result = mysqli_query($connection, $query);
?>
