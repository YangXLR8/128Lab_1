<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/b3442dd444.js" crossorigin="anonymous"></script>
        <title>YANG: Sign Up</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section>
            <div class="picBox">
                <img src="images/sign_up.png">
            </div>
            <div class="contentBox">
                <div class="formBx">
                    <h2>Sign Up</h2>
                    <form action="registration.php" method="post">
                        <div class="inputBx">
                            <i class="fa fa-user icon"></i>
                            <label>Username</label>
                            <input type="text" name="user_name" class="form-control" required> 
                            </div>
                        <div class="inputBx">
                            <i class="fa fa-phone"></i>
                            <label>Contact Number</label>
                            <input type="text" name="con_num" class="form-control" required>    
                            </div>
                        <div class="inputBx">
                            <i class="fa fa-envelope"></i>
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" required>    
                            </div>
                        <div class="inputBx">
                            <i class="fa fa-key"></i>
                            <label>Password</label>
                            <input type="password" name="password" pattern="(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}" 
                                title="Password must consist of atleast 8 characters, containing at least 1 capital letter, 1 number, and 1 symbol." class="form-control" id="myInput" required>
                            <input class="toggle" type="checkbox" onclick="myFunction()">
                            <p class="toggle-text">Show Password</p>
                        </div>
                        <div class="inputBx">
                            <button type="submit" class="btn btn-primary">Register</button>   
                        </div>
                        <div class="inputBx">
                          <p>Do you already have an account? <a href="index.php">Login</a></p>      
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script src="site.js"></script>
        <script> src="checkPassword.js"</script>
    </body>
</html>