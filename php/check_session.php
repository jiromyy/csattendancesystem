<?php
//get ID
$id = $_SESSION['id'];

if ($id==null) {
    header('location: index.php?login=expired');
    exit();

}
?>