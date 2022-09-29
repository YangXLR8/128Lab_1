<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>YANG: HOME</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body onmousemove="reset_interval()" onclick="reset_interval()" onkeypress="reset_interval()" onscroll="reset_interval()">
    <script type="text/javascript">
  
//the interval 'timer' is set as soon as the page loads
 
var timer = setInterval(function(){ auto_logout() }, 5000);
 
// the figure '20000' (20 seconds) indicates how many milliseconds the timer be set to.
 
//e.g. if you want it to set 5 mins, calculate 5min= 5x60=300 sec => 300,000 milliseconds.
  
function reset_interval(){
    //first step: clear the existing timer
    clearInterval(timer);
    
    //second step: implement the timer again
    timer = setInterval(function(){ auto_logout() }, 5000);
    //..completed the reset of the timer
}
 
function auto_logout(){
    //this function will redirect the user to the logout script
    window.location="logout.php";
    window.alert("Sorry. You're automatically logged out due to inactive for 10 seconds");
}
 
</script>
        <video src="images/home.mp4" class="vid-bg" autoplay loop muted></video>
        <div class="welcome-text">
            <h2> "WELCOME <?php echo $_SESSION['user_name']; ?>"</h2>
            <a class="btn" href="logout.php">
                <div class="logout">LOG OUT</div>
	        </a>
        </div>
    </body>
</html>