<?php
// Initialize the session

 include('include/home/header.php');
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
<center>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style type="text/css">
          body{ font: 14px sans-serif; 
                text-align: center; 
                background-image: url("bg2.jpg");
                height: 800px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }}
    </style>
</head>
<body>
    <div class="page-header">
       <font color = "white"> <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>

	
    <p>
		<a href="index.php" class="btn btn-primary" ><font color = "white">Let's START</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
</font>        
    </p>
	</center>
</body>
</html>