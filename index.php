<?php 
include('server.php'); 
?>

<html>
<head>
    <title> Sunday Friends Test</title>
      <link rel="stylesheet" type="text/css" href="Resources/css/style.css">
</head>
            
<center>  
    
    <body style="background-color:whitesmoke;">
        <form action="index.php" method="post">
            
            <div class="imgcontainer">
                <img src="Resources/css/img/sunday-friends-logo.jpg" alt="" class="avatar">
            </div>
            
            <?php 
                include('error.php');
            ?>

            <div class="container">
                <input type="text" placeholder="Username" name="uname">
           
                <input type="password" placeholder="Password" name="psw">

                 <button type="submit" name="login_user">Login</button>
            <div>
                    <input type="checkbox" checked="checked"> Remember me
            </div>
    
            
                <span class="psw"> <a href="#">Forgot password?</a></span>
            </div>
        </form>
       
    </body>
</center>
</html>


