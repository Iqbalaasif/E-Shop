<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
            <link rel="icon" href="img/Logo/1.logo.png" type="image/x-icon">
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width", initial-scale="1.0">
            <title>E-Shop</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
            <link rel="stylesheet" href="style.css">
        </head>
        <section id="header">
                <a href="index.html"><img src="img/Logo/3.png" class="logo" alt=""></a>
                <body>  
                <div>
                    <ul id="navbar">
                        <form action="search.php" class="form-inline my-2 my-lg-0" method="get">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search here" aria-label="Search ">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        <li><a  href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="cart.html"><i class="fa-solid fa-bag-shopping fa-lg"></i></a></li>
                        <li><a class="active" href="index.php"><i class="fa-solid fa-user"></i> Login </a></li>   
                    </ul>
                </div>
            </section>
	<?php
	// Start the session to access session variables
	session_start();

	// Check if the user is logged in. If not, redirect to the login page.
	if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
	  header("location: login.php");
	  exit;
	}

	// Display a welcome message with the user's name
	echo "<h1>Welcome, " . $_SESSION['username'] . "!</h1>";
	?>
	
	<p>You have successfully logged in.</p>
	
	<a href="logout.php"><strong>Logout</strong></a>
</body>
</html>
