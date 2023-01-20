<?php
if(session_status() !== PHP_SESSION_ACTIVE){
session_start();
}

include("connectiondb.php");

if (isset($_POST['login'])) {
	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);

	
    $password = sha1($password);//password encryption
    $query = "SELECT * FROM user WHERE username ='$username' AND password = '$password'";
    $results = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($results);
    
    if(mysqli_num_rows($results) != 1){
        header('location: index.php?login=incorrect');
        exit();
    }
    else{
        $_SESSION['user'] = $row['account_type'];
        $_SESSION['org'] = $row['org_id'];
        $_SESSION['id'] = $row['user_id'];
        header('location: dashboard.php'); 
    }
}


//eliminating unwanted characters in the input fields
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
} 

// USER LOGOUT  
if (isset($_POST['logout'])){
   session_destroy();
   header('location: index.php');
   exit();
}