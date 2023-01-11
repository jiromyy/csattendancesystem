<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<?php  
include("php/auth.php")
?>

        <!-- Login Form --> 
        <div class="hug">
            <div class="left">
                <img class="imgf" src="assets/mmsuadmin.jpg" alt="">
            </div>
            <div class="right">
                <div class="right-inner">
                <form class="form" action="" method="POST">
         
                    <div class="headframe">
                        <img class="img" src="assets/mmsulogo.png" alt="">
                        <h1 class="titletext">Event Attendance Portal</h1>
                    </div>
                    <div class="formframe">
                        <div>
                            <label class="label" for="username">Username</label>
                            <input class="inputbox" type="text" name="username" required>
                        </div>
                        <div>
                            <label class="label" for="password">Password</label>
                            <input class="inputbox" type="password" name="password" required>  
                        </div>
                    </div>

                    <div class="errors">
                      <?php 
                      $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                      
                      if(strpos($url, "login=expired") == true){
                        echo "<p class='errortext'> Please Login </p>";
                      }

                      elseif(strpos($url, "login=incorrect") == true){
                        echo "<p class='errortext'> Wrong username/password combination! </p>";
                      }
                      ?>
                    </div>

                    <button type="submit" name="login" class="loginbtn"><p class="text">Login<p></button>
                    <p class="forgotpass">Forgot Password?</p>
                  
                </form>
                </div>
            </div>
        </div>
</body>
</html>