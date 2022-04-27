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
        	<header><title>Create Theme</title></header>
	<div class="banner">
		<div class="logo">
			<img src = "logo.png">
		</div>
		<div class="rightBanner">
			Create Theme Page
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

	<div class="row">
	<?php	
		require 'SiteTheme.php';
		$sites = [];
		$fonts = array("serif", "sans-serif", "monospace", "cursive", "fantasy", "system-ui", "ui-serif", "ui-sans-serif", "ui-monospace", "ui-rounded", "emoji", "math", "fangsong");

		function rand_color() {
    			return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
		}

		$i = 0;
 
		while ($i < 100){
			$rand = array_rand($fonts, 1);
			$color = rand_color();
			$subs = substr($color, -6);
			$comp = dechex(16777215 - hexdec($subs));
			if(strlen($comp) < 6){
				while(strlen($comp) < 6){
					$comp = '0' . $comp;
				}
				$comp = '#' . $comp;
			}
			$monoDeci = hexdec($subs) - 1838629;
			if($monoDeci < 0) {
				$monoDeci = hexdec($subs) + 1838629;
			}
		        if(strlen(dechex($monoDeci)) < 6){
                                $temp = dechex($monoDeci);
                                while(strlen($temp) < 6){
                                $temp = '0' . $temp;
                                }
                                $mono = '#' . $temp;
                        } else {
                                $mono = '#' . dechex($monoDeci);
                        }
			$query = 'editTheme.php?id=' . $i . '&color=%23' . substr($color, -6) . '&comp=%23' . substr($comp, - 6) . '&mono=%23' . substr($mono, -6) . '&fontFamily=' . $fonts[$rand];
			echo '<a class="box" id="';
			echo $i;
			echo '" href="';
			echo $query;
			echo '" style="background-color:';
			echo $color;
			echo '; color:';
			echo $comp;
			echo '; font-family:';
			echo $fonts[$rand];
			echo '">
                         	<div class="babyHeader">
                                        Header
					<div class="babyLogo" style=" background-color:';
					echo $mono;
					echo '">
						<div class="babyLogoText" style=" color:';
						echo $comp;
						echo '">
							LOGO
						</div>
					</div>
                                </div>
				<div class="babyNav" style=" background-color:';
					echo $mono;
					echo '">
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
                        </a>';
			$tempSite = new SiteTheme($i, $color, $comp, $mono, $fonts[$rand]);
			array_push($sites, $tempSite);
			$i++;
		};
	?>
	</div>
    <div id="footer">
                <li class="first">(c)Jeremy Stocking</li>
                <li>Boise State University</li>
                <li>College of Engineering</li>
                <li>Computer Science Student</li>
    </div>
	</body>
</html>
