<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/b3442dd444.js" crossorigin="anonymous"></script>
        <title>YANG: Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section>
            <div class="picBox">
                <img src="images/login.png">
            </div>
            <div class="contentBox">
                <div class="formBx">
                    <h2>Login</h2>
                    <form action="validation.php" method="post">
                        <div class="inputBx">
                            <i class="fa fa-user icon"></i>
                            <label>Username</label>
                            <input type="text" name="user_name" class="form-control" required>    
                            </div>
                        <div class="inputBx">
                            <i class="fa fa-key"></i>
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" id="myInput" required>
                            <input class="toggle" type="checkbox" onclick="myFunction()">
                            <p class="toggle-text">Show Password</p>
                        </div>
                        <div class="inputBx">
                            <button type="submit" class="sub" class="btn btn-primary">Login</button>  
                        </div>
                        <div class="inputBx">
                          <p>Don't have an account yet? Create an account. <a href="sign_up.php">Sign Up</a></p>      
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script src="site.js"></script>
    </body>
</html>