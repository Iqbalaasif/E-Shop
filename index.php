<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/Logo/1.logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <title>E-Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<a href="index.html"><img src="img/Logo/3.png" class="logo" alt=""></a>
                <body>  
                <div>
                        <a href="index.html">Home</a>
                        <a href="shop.html">Shop</a>
                        <a href="blog.html">Blog</a>
                        <a href="about.html">About</a>
                        <a href="contact.html">Contact</a>
                        <a href="cart.html"><i class="fa-solid fa-bag-shopping fa-lg"></i></a></li>
                </div>

<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our E-Shop</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>