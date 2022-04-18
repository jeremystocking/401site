<?php
    session_start();
    if($_SESSION["loggedIn"] != "true"){
        Header("Location: index.php");
        exit;
    }
?>
<html>

                <header><title>Edit Theme</title></header>

        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="x-icon" href="favicon.png">
        <body>
        <div class="banner">
                <div class="logo">
                        <img src = "logo.png">
                </div>
                <div class="rightBanner">
                	Edit Theme
                </div>
        </div>
    <?php
        $id = $_GET['id'];
        $color = $_GET['color'];
        $comp = $_GET['comp'];
        $mono = $_GET['mono'];
        $fontFamily = $_GET['fontFamily'];
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['color'] = $color;
        $_SESSION['comp'] = $comp;
        $_SESSION['mono'] = $mono;
        $_SESSION['fontFamily'] = $fontFamily;
    ?>
    <h2>
	<div class ="bigBox" id="<?php echo $_GET['id'];?>
				" style="background-color:<?php echo $_GET['color'];?>
				; color:<?php echo $_GET['comp'];?>
				; font-family:<?php echo $_GET['fontFamily'];?>"> 
		<div class="babyHeader">
			Header
			<div class="babyLogo" style="background-color:<?php echo $_GET['mono'];?>">
				<div class="babyLogoText" style="color:<?php echo $_GET['comp'];?>">
					LOGO
				</div>
			</div>
		</div>
		<div class="babyNav" style=" background-color:<?php echo $_GET['mono']?>">
			<hr>Navigation Bar<hr>
		</div>
		<div class="babyContent">
			<br><b>Breakfast Hours</b><br>
                        XX:XX AM - XX:XX AM
                        <br><b>Lunch Hours</b><br>
                        XX:XX PM - XX:XX PM
                        <br><b>Dinner Hours</b><br>
                        XX:XX AM - XX:XX AM
                        <br><b>Brunch Hours</b><br>
                        XX:XX AM - XX:XX AM
                        <br><b>Bar Hours</b><br>
                        XX:XX AM - XX:XX AM
                        	<div>
                                	<br><b>Make A Reservation</b>
                                        <br><b>View the Menu</b>
                                        <br><b>Order Takeout</b>
                       		</div>
                </div>			
	</div>
    </h2>
    <form method="post" action="createSite.php">
    <input type="submit" name="accept" id="accept" value="Accept">
    </form>
	<h5>
                <form method="post" action="updateTheme.php">
			<?php $id = $_GET['id'];?>
                        <label for="color">Background Color:</label>
                        <input type="text" id="color" name="color" value="<?php echo $_GET['color'];?>"><br><br>
                        <label for="comp">Text Color:</label>
                        <input type="text" id="comp" name="comp" value="<?php echo $_GET['comp'];?>"><br><br>
			<label for="mono">Secondary Color:</label>
			<input type="text" id="mono" name="mono" value="<?php echo $_GET['mono'];?>"><br><br>
			<label for="fontFamily">Font:</label>
                <select name="fontFamily" id="fontFamily">
                <option value='serif' <?php if($_SESSION['fontFamily'] == 'serif'){ echo 'selected';}?> >Serif</option>
                <option value='sans-serif' <?php if($_SESSION['fontFamily'] == 'sans-serif'){ echo 'selected';}?> >Sans-Serif</option>
                <option value='monospace' <?php if($_SESSION['fontFamily'] == 'monospace'){ echo 'selected';}?> >Monospace</option>
                <option value='cursive' <?php if($_SESSION['fontFamily'] == 'cursive'){ echo 'selected';}?> >Cursive</option>
                <option value='fantasy' <?php if($_SESSION['fontFamily'] == 'fantasy'){ echo 'selected';}?> >Fantasy</option>
                <option value='system-ui' <?php if($_SESSION['fontFamily'] == 'system-ui'){ echo 'selected';}?> >System UI</option>
                <option value='ui-serif' <?php if($_SESSION['fontFamily'] == 'ui-serif'){ echo 'selected';}?> >UI Serif</option>
                <option value='ui-sans-serif' <?php if($_SESSION['fontFamily'] == 'ui-sans-serif'){ echo 'selected';}?> >UI Sans-Serif</option>
                <option value='ui-monospace' <?php if($_SESSION['fontFamily'] == 'ui-monospace'){ echo 'selected';}?> >UI Monospace</option>
                <option value='ui-rounded' <?php if($_SESSION['fontFamily'] == 'ui-rounded'){ echo 'selected';}?> >UI Rounded</option>
                <option value='emoji' <?php if($_SESSION['fontFamily'] == 'emoji'){ echo 'selected';}?> >Emoji</option>
                <option value='math' <?php if($_SESSION['fontFamily'] == 'math'){ echo 'selected';}?> >Math</option>
                <option value='fangsong' <?php if($_SESSION['fontFamily'] == 'fangsong'){ echo 'selected';}?> >Fangsong</option>

//			<?php
//			foreach ($fonts as $font) { echo '<option value="';
//                                        echo $font;
//                                        echo '"';
//					if($font == $_GET[fontFamily]){
//						echo ' selected';
//					};
//					echo '>';
//                                        echo $font;
//                                        echo '</option><br>';}; ?>

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
        <div id="footer">
                    <li class="first">(c)Jeremy Stocking</li>
                    <li>Boise State University</li>
                    <li>College of Engineering</li>
                    <li>Computer Science Student</li>
        </div>
        </body>
</html>

