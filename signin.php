<?php 
    include_once'signindetails.php';
    
?> 
<!DOCTYPE html>
<html>
<head>
    <title>SIGNIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./signin.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container">
        <div class="signin">
                <h2>Sign In</h2>
        </div>
        <form  method="post" action="signindetails.php">
           
            <?php if(isset($_SESSION['msg'])):?>
                <div class="input1">
                    <?php
                        echo $_SESSION['msg'];
                    ?>
                </div>
            <?php endif ?> 
            <div class="input">
                <p>  User Name</p>
                <input type="text" name="username" placeholder="User name" class="name">
            </div>

              <div class="input">
                <p> Password</p>
                <input type="password" name="password" placeholder="password" id="pass" class="name" >
            </div>

            <div class="input">
                <input  type="submit" name="Login" value="Login" class="btn1">
                <input  type="submit" name="cancel" value="Cancel" class="btn2">
            </div>

            <div class="input">
                <a href="signup.php">Create An account</a>
            </div>
		</form>
    </div>
</body>
</html>