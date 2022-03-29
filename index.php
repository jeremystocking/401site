<html>

                <header><title>Sign In</title></header>

        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="x-icon" href="favicon.png">
        <body>
	<div class="banner">
		<div class="logo">
			<img src = "logo.png">
		</div>
		<div class="rightBanner">
			Sign In
		</div>
	</div>
	<div id="warning"> <?php echo $_GET['message']; ?> </div>
	<h5>
		<form method="post" action="checkUser.php">
                        <label for="userID">Username:</label>
                        <input type="text" id="userID" name="userID"><br><br>
                        <label for="pword">Password:</label>
                        <input type="text" id="pword" name="pword"><br><br>

                        <input type="submit" name="Sign In" id="signIn" value="Sign In">
                </form>
	</h5>
        <div class="banner">
                <div class="logo">
                        <img src = "logo.png">
                </div>
                <div class="rightBanner">
                        Create Account
                </div>
        </div>
        <h5>
                <form method="post" action="createUser.php">
                        <label for="userID">Username:</label>
                        <input type="text" id="userID" name="userID"><br><br>
                        <label for="pword">Password:</label>
                        <input type="text" id="pword" name="pword"><br><br>
        
			<input type="submit" name="Create Account" id="createAccount" value="Create Account"> 
		</form>
        </h5>
	<div id="footer">
		<li class="first">(c)Jeremy Stocking</li>
		<li>Boise State University</li>
		<li>College of Engineering</li>
		<li>Computer Science Student</li>
	</div>
        </body>
</html>
