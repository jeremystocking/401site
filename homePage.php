<?php
    session_start();
    if($_SESSION["loggedIn"] != "true"){
        Header("Location: index.php");
        exit;
    }
?>
<html>
    
        <link rel="stylesheet" href="style.css">
	<body>	
        	<header><title>Home Page</title></header>
	<div class="banner">
		<div class="logo">
			<img src = "logo.png">
		</div>
	        <div class="rightBanner">
                        Home Page
                </div>
	</div>
	<h4>
		<a href="homePage.php" class="left" title="Home">
                <img src="homeIcon.png" alt="Home Icon" width="50" height="50">
                </a>

                <a href="createSite.php">To Create Website Page</a>

                <a href="manageSite.php">To Manage Website Page</a>
		
		<a href="signOut.php" class="right" title="Sign Out">
                <img src="signOutIcon.png" alt="Sign Out Icon" width="50" height="50">
                </a>
	</h4>

	<h2>
		Welcome <?php 
				session_start();
				echo $_SESSION['userID']; ?> !	
	</h2>
	<div id="footer">
                <li class="first">(c)Jeremy Stocking</li>
                <li>Boise State University</li>
                <li>College of Engineering</li>
                <li>Computer Science Student</li>
    </div>
</html>
