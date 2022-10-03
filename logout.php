<?php 
     $conn=mysqli_connect("localhost", "root", "", "lab1_128");
     session_start();
     session_unset();
     session_destroy();
     header("location://localhost/register/logout_page.php")
?>