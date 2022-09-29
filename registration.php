<?php

session_start();

header('location:sign_up.php');

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, '128lab1_db');

$user_name = $_POST['user_name'];
$con_num = $_POST['con_num'];
$email = $_POST['email'];
$password = $_POST['password'];
$s = " select * from user_table where user_name = '$user_name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    echo "<script>alert('The username entered is already taken.'); location='sign_up.php';</script>";;
}else{
    $reg= " insert into user_table(user_name, con_num, email, password) values ('$user_name', '$con_num', '$email' , '$password')";
    mysqli_query($con, $reg);
    header('location:home.php');
}
?>
   
