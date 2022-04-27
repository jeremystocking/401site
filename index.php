<html>

                <header><title>Sign In</title></header>
<head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="x-icon" href="favicon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
        <body>
        <div class="fade" style="text-align:center;">
            Welcome!
        </div>
        <script>
                $(document).ready(function() {
                    $(".fade").hide().fadeIn(4000);
                    $(".createClass").hide();
                });
        </script>
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
                        <input type="password" id="pword" name="pword"><br><br>

                        <input type="submit" name="Sign In" id="signIn" value="Sign In">
                </form>
	</h5>
        <button type="button" id="createAccountButton">Create Account</button>
        <div class="createClass">
        <div class="banner">
                <div class="logo">
                        <img src = "logo.png">
                </div>
                <div class="rightBanner">
                        Create Account
                </div>
        </div>
        <h5 class="createClass">
                <form method="post" action="createUser.php">
                        <label for="userID">Username:</label>
                        <input type="text" id="userID" name="userID"><br><br>
                        <label for="pword">Password:</label>
                        <input type="password" id="pword" name="pword"><br><br>
                        <label for="pword2">Re-type Password:</label>
                        <input type="password" id="pword2" name="pword2"><br><br>
        
			<input type="submit" name="Create Account" id="createAccount" value="Create Account"> 
		</form>
        </h5>
        <script>
            
            $("#createAccountButton").click(function() {
                $("#createAccountButton").fadeOut("slow");
                $(".createClass").fadeIn(2000);
            });
        </script>
        </div>
	<div id="footer">
		<li class="first">(c)Jeremy Stocking</li>
		<li>Boise State University</li>
		<li>College of Engineering</li>
		<li>Computer Science Student</li>
	</div>
    
        </body>
</html>
