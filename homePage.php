<?php
    session_start();
    if($_SESSION["loggedIn"] != "true"){
        Header("Location: index.php");
        exit;
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
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
        <div class="welcome">
            Welcome <?php
            session_start();
            echo $_SESSION['userID']; ?> !
            <script>
                $(document).ready(function() {
                $(".welcome").hide().fadeIn(4000);
        });
</script>
        </div>
	</h2>
	<div id="footer">
                <li class="first">(c)Jeremy Stocking</li>
                <li>Boise State University</li>
                <li>College of Engineering</li>
                <li>Computer Science Student</li>
    </div>
</html>
