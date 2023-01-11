<?php
if(session_status() !== PHP_SESSION_ACTIVE){
session_start();
}

include("php/connectiondb.php");

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	
    $password = sha1($password);
    $query = "SELECT * FROM user WHERE username ='$username' AND password = '$password'";
    $results = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($results);
    

    if(mysqli_num_rows($results) != 1){
        header('location: index.php?login=incorrect');
        exit();
    }
    else{
        $type = $row['usertype'];
        $_SESSION['id'] = $row['userID'];
        
        if($type == "super_admin"){
            header('location: superdmin/home.php');
        }
        else if($type == "org_admin"){
            header('location: admin/home.php');
        }
        else if($type == "attendance_checker"){
            header('location: attendancechecker/home.php');
        }
        else{
            header('location: accountmanager/home.php');
        }
    }
}

  // USER LOGOUT  
if (isset($_POST['logout'])){
   session_destroy();
   header('location: ../index.php');
   exit();
 }