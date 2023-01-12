<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
    <body>

        <!--LOGIN FORM-->
        <div class="hug">
            <div class="left">
                <img class="imgf" src="img/mmsuadmin.jpg" alt="mmsuadmin.jpg">
            </div>
            <div class="right">
                <form class="form" action="POST">inner
                    <div class="emptydiv"></div>
                    <div class="headframe">
                        <img class="img" src="img/mmsulogo.png" alt="">
                        <h1 class="titletext">Event Attendance Portal</h1>
                    </div>
                    <div class="formframe">
                        <div class="input-box-label">
                            <label class="label" for="username">Username</label>
                            <input class="inputbox" type="text" name="username" required placeholder="Enter username">
                        </div>
                        <div class="input-box-label">
                            <label class="label" for="password">Password</label>
                            <input class="inputbox" type="password" name="password" required placeholder="Enter password">  
                        </div>
                    </div>

                    <button class="loginbtn"><p class="text">Login<p></button>
                    <p class="forgotpass">Forgot Password?</p>

                    
                </form><p class="footer">Terms of Use</p>
            </div>
        </div>
        
    </body>

<?php  

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = " ";

 //include('connectiondb.php')

//server side validation
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
 	 if (empty($_POST["username"])) 
 	 {
        $username = "Name is required";
     }
     else 
     {
       $username = test_input($_POST["username"]);
     }
            
     if (empty($_POST["psword"])) 
     {
       $psword = "Password is required";
            
     }
     else 
     {
       $psword = test_input($_POST["psword"]);

	} 
	

     if(!empty($_POST['username']) && isset($_POST['username']) && !empty($_POST['psword']) && isset($_POST['psword']))
    {
    	
    	//checks if username and password is already been in mysql
 		//$sql = "SELECT username, password FROM user WHERE username = '$username' AND password = '$psword'";
 		$data = $connection->query($sql);
 		 //var_dump($data);

 	   //if matched login	 
 	   if($data->num_rows > 0)
       {
       			session_start();
       		    $row = $data->fetch_assoc();
       		    $_SESSION["username"] = $row['username'];
                $_SESSION["password"] = $row['password'];
    
       		echo '<script type="text/javascript">
				alert("Welcome!");
				window.location.href = "home.php";
				</script>';
       }
       //else not registered
       else
       {
       		echo '<script type="text/javascript">
				alert("Please Register Your Account!");
				window.location.href = "login.php";
				</script>';
       }
	
	}
	else
    {
    	//for debugging purposes
         exit("empty variables");
        
    }   
}

//closing connection
//$connection->close();

//eliminating unwanted characters in the input fields
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
} 

?>

</body>

</html>