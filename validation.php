<?php

session_start();

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, '128lab1_db');

$user_name = $_POST['user_name'];
$password = $_POST['password'];
$s = " select * from user_table where user_name = '$user_name' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    $_SESSION['user_name'] = $user_name;
    header('location:home.php');
}else{
    echo "<script>alert('The username or password you entered is incorrect.'); location='index.html';</script>";;
}

?>