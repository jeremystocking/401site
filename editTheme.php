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
	<div class="row">
	<div class ="box" id="<?php echo $_GET['id'];?>
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
	</div>
	<?php
		$fonts = array("serif", "sans-serif", "monospace", "cursive", "fantasy", "system-ui", "ui-serif", "ui-sans-serif", "ui-monospace", "ui-rounded", "emoji", "math", "fangsong");
	?>
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
                        <?php
                        	foreach ($fonts as $font) {
                                	echo '<option value="';
                                        echo $font;
                                        echo '"';
					if($font == $_GET[fontFamily]){
						echo ' selected';
					};
					echo '>';
                                        echo $font;
                                        echo '</option><br>';
                        	}
                        ?>
			</select><br><br>
                        <input type="submit" name="update" id="update" value="Update">
	        </form>
	 <div id="footer">
		<li class="first">(c)Jeremy Stocking</li>
                <li>Boise State University</li>
                <li>College of Engineering</li>
                <li>Computer Science Student</li>
        </div>
        </body>
</html>

