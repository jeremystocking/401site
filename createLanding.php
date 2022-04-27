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
	<h1>
        <header><title>Create Landing Page</title></header>
	</h1>
	<div class="banner">
		<div class="logo">
			<img src = "logo.png">
		</div>
	</div>

	<h4>
                <a href="homePage.php" class="right" title="Home">
                <img src="homeIcon.png" alt="Home Icon" width="50" height="50">
                </a>
        
		<a href="signOut.php" class="right" title="Sign Out">
                <img src="signOutIcon.png" alt="Sign Out Icon" width="50" height="50">
                </a>
	</h4>

        <h2>
                Create Landing Page

        </h2>
        <?php session_start(); ?>
        <h6>
            <br><b>Restaurant Name: <?php echo $_SESSION['dinerName'];?></b>
            <br><b>Address: <?php echo $_SESSION['address'];?></b>
            <br><b>Phone: <?php echo $_SESSION['phone'];?></b><br>

            <br><b>Breakfast Hours</b><br>
            <?php echo $_SESSION['bStart'];?> <?php echo $_SESSION['bAMPM1'];?> - <?php echo $_SESSION['bEnd'];?> <?php echo $_SESSION['bAMPM2'];?>
            <br><b>Lunch Hours</b><br>
            <?php echo $_SESSION['lStart'];?> <?php echo $_SESSION['lAMPM1'];?> - <?php echo $_SESSION['lEnd'];?> <?php echo $_SESSION['lAMPM2'];?>
            <br><b>Dinner Hours</b><br>
            <?php echo $_SESSION['dStart'];?> <?php echo $_SESSION['dAMPM1'];?> - <?php echo $_SESSION['dEnd'];?> <?php echo $_SESSION['dAMPM2'];?>
            <br><b>Brunch Hours</b><br>
            <?php echo $_SESSION['wStart'];?> <?php echo $_SESSION['wAMPM1'];?> - <?php echo $_SESSION['wEnd'];?> <?php echo $_SESSION['wAMPM2'];?>
            <br><b>Bar Hours</b><br>
            <?php echo $_SESSION['barStart'];?> <?php echo $_SESSION['barAMPM1'];?> - <?php echo $_SESSION['barEnd'];?> <?php echo $_SESSION['barAMPM2'];?>
        </h6>
        <form method="post" action="createSite.php">
        <input type="submit" name="accept" id="accept" value="Accept">
        </form>
	<h5>
		Restaurant Information:<br>
                <form method="post" action="updateLanding.php">
                        <label for="dinerName">Restaurant Name:</label>
                        <input type="text" id="dinerName" name="dinerName" value="<?php echo $_SESSION['dinerName'];?>"><br>
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" value="<?php echo $_SESSION['address'];?>"><br>
                        <label for="phone">Phone:</label>
                        <input type="text" id="phone" name="phone" value="<?php echo $_SESSION['phone'];?>"><br><br>

                        Hours of Operation:<br>
                        <label for="bStart">Breakfast:</label>
                        <input type="text" id="bStart" name="bStart" value="<?php echo $_SESSION['bStart'];?>">
                        <select name="bAMPM1" id="bAMPM1">
                        <option value="AM" <?php if($_SESSION['bAMPM1'] =="AM"){ echo ' selected';};?>>AM</option>
                        <option value="PM" <?php if($_SESSION['bAMPM1'] =="PM"){ echo ' selected';};?>>PM</option>
                        </select>
                        <label for="bEnd"> to </label>
                        <input type="text" id="bEnd" name="bEnd" value="<?php echo $_SESSION['bEnd'];?>">
                        <select name="bAMPM2" id="bAMPM2">
                        <option value="AM" <?php if($_SESSION['bAMPM2'] =="AM"){ echo ' selected';};?>>AM</option>
                        <option value="PM" <?php if($_SESSION['bAMPM2'] =="PM"){ echo ' selected';};?>>PM</option>
                        </select><br><br>

                        <label for="lStart">Lunch:</label>
                        <input type="text" id="lStart" name="lStart" value="<?php echo $_SESSION['lStart'];?>">
                        <select name="lAMPM1" id="lAMPM1">
                        <option value="AM" <?php if($_SESSION['lAMPM1'] =="AM"){ echo ' selected';};?>>AM</option>
                        <option value="PM" <?php if($_SESSION['lAMPM1'] =="PM"){ echo ' selected';};?>>PM</option>
                        </select>
                        <label for="lEnd"> to </label>
                        <input type="text" id="lEnd" name="lEnd" value="<?php echo $_SESSION['lEnd'];?>">
                        <select name="lAMPM2" id="lAMPM2">
                        <option value="AM" <?php if($_SESSION['lAMPM2'] =="AM"){ echo ' selected';};?>>AM</option>
                        <option value="PM" <?php if($_SESSION['lAMPM2'] =="PM"){ echo ' selected';};?>>PM</option>
                        </select><br><br>

                        <label for="dStart">Dinner:</label>
                        <input type="text" id="dStart" name="dStart" value="<?php echo $_SESSION['dStart'];?>">
                        <select name="dAMPM1" id="dAMPM1">
                        <option value="AM" <?php if($_SESSION['dAMPM1'] =="AM"){ echo ' selected';};?>>AM</option>
                        <option value="PM" <?php if($_SESSION['dAMPM1'] =="PM"){ echo ' selected';};?>>PM</option>
                        </select>
                        <label for="dEnd"> to </label>
                        <input type="text" id="dEnd" name="dEnd" value="<?php echo $_SESSION['dEnd'];?>">
                        <select name="dAMPM2" id="dAMPM2">
                        <option value="AM" <?php if($_SESSION['dAMPM2'] =="AM"){ echo ' selected';};?>>AM</option>
                        <option value="PM" <?php if($_SESSION['dAMPM2'] =="PM"){ echo ' selected';};?>>PM</option>
                        </select><br><br>

                        <label for="wStart">Brunch:</label>
                        <input type="text" id="wStart" name="wStart" value="<?php echo $_SESSION['wStart'];?>">
                        <select name="wAMPM1" id="wAMPM1">
                        <option value="AM" <?php if($_SESSION['wAMPM1'] =="AM"){ echo ' selected';};?>>AM</option>
                        <option value="PM" <?php if($_SESSION['wAMPM1'] =="PM"){ echo ' selected';};?>>PM</option>
                        </select>
                        <label for="wEnd"> to </label>
                        <input type="text" id="wEnd" name="wEnd" value="<?php echo $_SESSION['wEnd'];?>">
                        <select name="wAMPM2" id="wAMPM2">
                        <option value="AM" <?php if($_SESSION['wAMPM2'] =="AM"){ echo ' selected';};?>>AM</option>
                        <option value="PM" <?php if($_SESSION['wAMPM2'] =="PM"){ echo ' selected';};?>>PM</option>
                        </select><br><br>

                        <label for="barStart">Bar:</label>
                        <input type="text" id="barStart" name="barStart" value="<?php echo $_SESSION['barStart'];?>">
                        <select name="barAMPM1" id="barAMPM1">
                        <option value="AM" <?php if($_SESSION['barAMPM1'] =="AM"){ echo ' selected';};?>>AM</option>
                        <option value="PM" <?php if($_SESSION['barAMPM1'] =="PM"){ echo ' selected';};?>>PM</option>
                        </select>
                        <label for="barEnd"> to </label>
                        <input type="text" id="barEnd" name="barEnd" value="<?php echo $_SESSION['barEnd'];?>">
                        <select name="barAMPM2" id="barAMPM2">
                        <option value="AM" <?php if($_SESSION['barAMPM2'] =="AM"){ echo ' selected';};?>>AM</option>
                        <option value="PM" <?php if($_SESSION['barAMPM2'] =="PM"){ echo ' selected';};?>>PM</option>
                        </select><br><br>

                        <input type="submit" name="update" id="update" value="Update">
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
