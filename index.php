<?php
    if(isset($_POST['submit'])){
        $conn=mysqli_connect("localhost", "root", "", "lab1_128");
        $user=$_POST['user'];
        $password=$_POST['password'];
        $sql="SELECT * FROM userdata WHERE user = '{$user}'";
        $res=mysqli_query($conn, $sql);
            if(mysqli_num_rows($res)>0){
                $row=mysqli_fetch_assoc($res);
                $pass=$row['password'];
                if($pass===$password){
                    session_start();
                    $_SESSION['user']=$row['user'];
                    header("location://localhost/register/home.php");
                }else{
                    echo "<div class='alert alert-danger'>Invalid password</div>"; 
                }
            }else{
                echo "<div class='alert alert-danger'>Account Does Not Exist. Please Sign Up first.</div>";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b3442dd444.js" crossorigin="anonymous"></script>
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
    body{
        background:url("images/login.jpg");
        background-size: cover;
        color: snow; 
    }
    .container{
        margin-top: 120px;
    }
    form{
        padding: 40px;
        background: rgba(105, 33, 113, 0.5);
    }
    
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4">
                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                        <h1 class="text-center">Login</h1>
                        <div class="form-group">
                            <i class="fa fa-user icon"></i>
                            <label for="">Username</label>
                            <input type="text" name="user" placeholder="Username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <i class="fa fa-key"></i>
                            <label for="">Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control" id="myInput" required>
                            <input class="toggle" type="checkbox" onclick="myFunction()">Show Password
                        </div>
                        <div class="form-group my-2">
                            <input type="submit" name="submit" class="form-control btn btn-success" value="Login">
                        </div>
                        <div class="form-group my-2">
                        Don't have an Account? <span><a href="register.php">Sign_up</a></span>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
    <script src="showPassword.js"></script>
</body>
</html>
