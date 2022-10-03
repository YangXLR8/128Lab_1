
<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>LOGOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
    body{
        background:url("images/home.jpg");
        background-size: cover;
        color: snow; 
    }
    .container{
        margin-top:0px;
    }
    .nav-link{
        text-transform:UPPERCASE;
    }
    form{
        padding: 40px;
        background: #303952;
        box-shadow: 20px 30px 0px #130f40, -20px 30px 0px #130f40;
    }
    .btn-danger{
        width: 100px;
    }
    #goodbye{
        font-size:200px;
        font-weight:900;
        text-align:center;
        color:#26c1ad;
    }
    #text{
        font-size:50px;
        font-weight:900;
        text-transform: UPPERCASE;
        text-align:center;
        color:purple;
    }
</style>
<body>
    
    <div class="container">
        <nav class="navbar navbar-light">
            <a class="navbar-brand">EXIT PAGE</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-danger" href="index.php">Login</a>
                </li>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="goodbye">
                Goodbye!
            </div>
            <div class="col-md-12" id="text">
            You've Logged Out.
        </div>
    </div>
    

</body>
</html>
