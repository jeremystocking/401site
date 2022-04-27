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
        	<header><title>Create Website</title></header>
	</h1>
	<div class="banner">
		<div class="logo">
			<img src = "logo.png">
		</div>
        <div class="rightBanner">
                    Create Website
        </div>
	</div>	
	<h4>		
		<a href="homePage.php" class="left" title="Home">
		<img src="homeIcon.png" alt="Home Icon" width="50" height="50">
		</a>

                <a href="createMenu.php">To Create Menu Page</a>

                <a href="createTheme.php">To Create Theme Page</a>

                <a href="createLanding.php">To Create Landing Page</a>
		
		<a href="signOut.php" class="right" title="Sign Out">
                <img src="signOutIcon.png" alt="Sign Out Icon" width="50" height="50">
 		</a>
	</h4>
	
	<h2>
		<br>Preview:<br>
    <?php session_start();?>
    <div class="bigBox" id="<?php echo $_SESSION['id'];?>
                " style="background-color:<?php echo $_SESSION['color'];?>
                ; color:<?php echo $_SESSION['comp'];?>
                ; font-family:<?php echo $_SESSION['fontFamily'];?>">
        <div class="babyHeader">
            <?php if($_SESSION['dinerName'] == ''){
                echo 'Header';
            }else{
                echo $_SESSION['dinerName'];
            }?>
            <div class="babyLogo" style="background-color:<?php echo $_SESSION['mono'];?>">
                <div class="babyLogoText" style="color:<?php echo $_SESSION['comp'];?>">
                    LOGO
                </div>
            </div>
            </div>
            <div class="babyNav" style=" background-color:<?php echo $_SESSION['mono']?>">
            <hr>Navigation Bar<hr>
            </div>
            <div class="babyContent">
            <br><b>Breakfast Hours</b><br>
<?php if($_SESSION['bStart'] == ''){
    echo 'XX:XX';
}else{
    echo $_SESSION['bStart'];
}?> <?php if($_SESSION['bAMPM1'] == ''){
    echo 'AM';
}else{
    echo $_SESSION['bAMPM1'];
}?> - <?php if($_SESSION['bEnd'] == ''){
    echo 'XX:XX';
}else{
    echo $_SESSION['bEnd'];
}?> <?php if($_SESSION['bAMPM2'] == ''){
    echo 'AM';
}else{
    echo $_SESSION['bAMPM2'];
}?>
                        <br><b>Lunch Hours</b><br>
<?php if($_SESSION['lStart'] == ''){
    echo 'XX:XX';
}else{
    echo $_SESSION['lStart'];
}?> <?php if($_SESSION['lAMPM1'] == ''){
    echo 'AM';
}else{
    echo $_SESSION['lAMPM1'];
}?> - <?php if($_SESSION['lEnd'] == ''){
    echo 'XX:XX';
}else{
    echo $_SESSION['lEnd'];
}?> <?php if($_SESSION['lAMPM2'] == ''){
    echo 'AM';
}else{
    echo $_SESSION['lAMPM2'];
}?>
                        <br><b>Dinner Hours</b><br>
<?php if($_SESSION['dStart'] == ''){
    echo 'XX:XX';
}else{
    echo $_SESSION['dStart'];
}?> <?php if($_SESSION['dAMPM1'] == ''){
    echo 'AM';
}else{
    echo $_SESSION['dAMPM1'];
}?> - <?php if($_SESSION['dEnd'] == ''){
    echo 'XX:XX';
}else{
    echo $_SESSION['dEnd'];
}?> <?php if($_SESSION['dAMPM2'] == ''){
    echo 'AM';
}else{
    echo $_SESSION['dAMPM2'];
}?>
                        <br><b>Brunch Hours</b><br>
<?php if($_SESSION['wStart'] == ''){
    echo 'XX:XX';
}else{
    echo $_SESSION['wStart'];
}?> <?php if($_SESSION['wAMPM1'] == ''){
    echo 'AM';
}else{
    echo $_SESSION['wAMPM1'];
}?> - <?php if($_SESSION['wEnd'] == ''){
    echo 'XX:XX';
}else{
    echo $_SESSION['wEnd'];
}?> <?php if($_SESSION['wAMPM2'] == ''){
    echo 'AM';
}else{
    echo $_SESSION['wAMPM2'];
}?>
                        <br><b>Bar Hours</b><br>
<?php if($_SESSION['barStart'] == ''){
    echo 'XX:XX';
}else{
    echo $_SESSION['barStart'];
}?> <?php if($_SESSION['barAMPM1'] == ''){
    echo 'AM';
}else{
    echo $_SESSION['barAMPM1'];
}?> - <?php if($_SESSION['barEnd'] == ''){
    echo 'XX:XX';
}else{
    echo $_SESSION['barEnd'];
}?> <?php if($_SESSION['barAMPM2'] == ''){
    echo 'AM';
}else{
    echo $_SESSION['barAMPM2'];
}?>
                            <div>
                                    <br><b>Make A Reservation</b>
                                        <br><b>View the Menu</b>
                                        <br><b>Order Takeout</b>
                               </div>
                            <div>
                                <br><b>Address: <?php echo $_SESSION['address'];?></b>
                                <br><b>Phone: <?php echo $_SESSION['phone'];?></b>
                            </div>
                </div>
            </div>
        </h2>
        <form method="post" action="writeSite.php">
        <input type="submit" name="accept" id="accept" value="Accept">
        </form>
        <?php echo $_GET['message'];?>
        <div id="footer">
                    <li class="first">(c)Jeremy Stocking</li>
                    <li>Boise State University</li>
                    <li>College of Engineering</li>
                    <li>Computer Science Student</li>
        </div>
	</body>
</html>
