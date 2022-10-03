
<?php
    if(isset($_POST['save'])){
        $conn=mysqli_connect("localhost", "root", "", "lab1_128");
        $user=$_POST['user'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="SELECT * FROM userdata WHERE user = '{$user}'";
        $res=mysqli_query($conn, $sql);
        if(mysqli_num_rows($res)>0){
            echo "<div class='alert alert-danger'>Username Already Exist. Please use another username</div>";
        }
        else{
            $sql1="INSERT INTO userdata(user, email, password) VALUES ('{$user}', '{$email}', '{$password}')";
            mysqli_query($conn, $sql1);
            echo "<script>alert('Hello $user! You have successfully registered. You can now try to login.'); location='index.php';</script>";
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
    <title>SIGN-UP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
    body{
        background:url("images/signUp.jpg");
        background-size: cover;
        color: snow; 
    }
    .container{
        margin-top: 40px;
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
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <h1 class="text-center">Sign Up</h1>
                    <div class="form-group">
                        <i class="fa fa-user icon"></i>
                        <label for="">Username</label>
                        <input type="text" name="user" placeholder="Username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-envelope"></i>
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-key"></i>
                        <label for="">Password</label>
                        <input type="password" name="password" pattern="(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}" 
                                title="Password must consist of atleast 8 characters, containing at least 1 capital letter, 1 number, and 1 symbol." placeholder="Password" class="form-control" id="myInput" required>
                        <input class="toggle" type="checkbox" onclick="myFunction()">Show Password
                        
                    </div>
                    <div class="form-group my-2">
                        <input type="submit" name="save" class="form-control btn btn-success" value="Register">
                    </div>
                    <div class="form-group my-2">
                       Already have an Account? <span><a href="index.php">Login</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="showPassword.js"></script>
</body>
</html>
