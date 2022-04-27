<?php
session_start();

$userStyle = fopen("userStyle.css", "w");

$body = "body{\nfont-family:" . $_SESSION['fontFamily'] . ";\nbackground-color:" . $_SESSION['color'] . ";\ncolor:" . $_SESSION['comp'] . ";\n}\n";
fwrite($userStyle, $body);

$header = "h1{\nheight:50px;\ntext-align:center;\nposition:relative;\n}\n";
fwrite($userStyle, $header);

$logo = ".logo{\nbackground-color:" . $_SESSION['mono'] . ";\nheight:50px;\nwidth:50px;\nposition:absolute;\ntop:0px;\nleft:0px;\nborder-radius:33%;\nborder-style:solid\n}\n";
fwrite($userStyle, $logo);

$logoText = ".logoText{\ncolor:" . $_SESSION['comp'] . ";\npadding: 18px 0px 0px 0px;\nfont-size:12px;\n}\n";
fwrite($userStyle, $logoText);

$nav = ".nav{\nbackground-color:" . $_SESSION['mono'] . ";\ndisplay:flex;\njustify-content:space-evenly;\n}\n";
fwrite($userStyle, $nav);

$content = ".content{\nfont-size: 24px;\ntext-align: center;\n}\n";
fwrite($userStyle, $content);

$aLink = "a:link {\ncolor:" . $_SESSION['comp'] . ";\n}\n";
fwrite($userStyle, $aLink);

$aVisited = "a:visited {\ncolor:" . $_SESSION['comp'] . ";\n}\n";
fwrite($userStyle, $aVisited);

$aHover = "a:hover {\ncolor:" . $_SESSION['comp'] . ";\n}\n";
fwrite($userStyle, $aHover);

$aActive = "a:active {\ncolor:" . $_SESSION['color'] . ";\n}\n";
fwrite($userStyle, $aActive);

fwrite($userStyle, "table
{
width: 90%;
margin-left:5%;
margin-right:5%;
text-align: center;
border-collapse: collapse;
}

table > thead > tr > th
{
background-color: " . $_SESSION['color'] . ";
border: solid 1px " . $_SESSION['mono'] . ";
border-bottom-width: 2px;
border-right-width: 2px;
padding 10 10;
}

table > tr, td
{
background-color: " . $_SESSION['color'] . ";
border: solid 1px " . $_SESSION['mono'] . ";
border-bottom-width: 2px;
border-right-width: 2px;
padding: 10 10;
}

.description
{
    Text-align: left;
    font-size: 12px;
}

#copyPaste
{
Text-align: left;
font-size: 12px;
border: solid 1px;
}
");

fclose($userStyle);

$userLandingPage = fopen("userLandingPage.html", "w");
fwrite($userLandingPage, '<html><link rel="stylesheet" href="userStyle.css"><body><h1>');
fwrite($userLandingPage, $_SESSION['dinerName']);

$logoContent = '<div class="logo"><div class="logoText">' . 'LOGO' . '</div></div>';
fwrite($userLandingPage, $logoContent);

fwrite($userLandingPage, "</h1><hr><div class=\"nav\"><a href=\"userMakeReservation.html\">Make a Reservation</a> | <a href=\"userViewMenu.html\">View Menu</a> | <a href=\"userOrderTakeout.html\">Order Takeout</a></div><hr>");

$breakfastHours = '<div class="content"><br><b>Breakfast Hours</b><br>' . $_SESSION['bStart'] . $_SESSION['bAMPM1'] . ' - ' . $_SESSION['bEnd'] . $_SESSION['bAMPM2'] . "</div>";
fwrite($userLandingPage, $breakfastHours);

$lunchHours = '<div class="content"><br><b>Lunch Hours</b><br>' . $_SESSION['lStart'] . $_SESSION['lAMPM1'] . ' - ' . $_SESSION['lEnd'] . $_SESSION['lAMPM2'] . "</div>";
fwrite($userLandingPage, $lunchHours);

$dinnerHours = '<div class="content"><br><b>Dinner Hours</b><br>' . $_SESSION['dStart'] . $_SESSION['dAMPM1'] . ' - ' . $_SESSION['dEnd'] . $_SESSION['dAMPM2'] . "</div>";
fwrite($userLandingPage, $dinnerHours);

$brunchHours = '<div class="content"><br><b>Brunch Hours</b><br>' . $_SESSION['wStart'] . $_SESSION['wAMPM1'] . ' - ' . $_SESSION['wEnd'] . $_SESSION['wAMPM2'] . "</div>";
fwrite($userLandingPage, $brunchHours);

$barHours = '<div class="content"><br><b>Bar Hours</b><br>' . $_SESSION['barStart'] . $_SESSION['barAMPM1'] . ' - ' . $_SESSION['barEnd'] . $_SESSION['barAMPM2'] . "</div>";
fwrite($userLandingPage, $barHours);

$reservationLink = '<div class="content"><br><b><a href="userMakeReservation.html">Make a Reservation</a></b>';
fwrite($userLandingPage, $reservationLink);

$viewMenuLink = '<div class="content"><br><b><a href="userViewMenu.html">View Menu</a></b>';
fwrite($userLandingPage, $viewMenuLink);

$takeoutLink = '<div class="content"><br><b><a href="userOrderTakeout.html">Order Takeout</a></b>';
fwrite($userLandingPage, $takeoutLink);

$aboutUsLink = '<div class="content"><br><b><a href="userLandingPage.html">About Us</a></b><br>';

fwrite($userLandingPage, '<div class="content"><br>Phone: ' . $_SESSION['phone'] . '<br></div>');
fwrite($userLandingPage, '<div class="content">Address: ' . $_SESSION['address'] . '<br></div></div>');

fwrite($userLandingPage, '<p id="copyPaste"><u>To Download copy and paste the following text in terminal:</u><br> mkdir userSite<br> cd userSite<br> curl dinermaker.herokuapp.com/userStyle.css > userStyle.css<br> curl dinermaker.herokuapp.com/userLandingPage.html > userLandingPage.html<br> curl dinermaker.herokuapp.com/userMakeReservation.html > userMakeReservation.html<br> curl dinermaker.herokuapp.com/userViewMenu.html > userViewMenu.html<br> curl dinermaker.herokuapp.com/userOrderTakeout.html > userOrderTakeout.html<br></p>');

fwrite($userLandingPage, "</body></html>");
fclose($userLandingPage);


$userMakeReservation = fopen("userMakeReservation.html", "w");
fwrite($userMakeReservation, '<html><link rel="stylesheet" href="userStyle.css"><body><h1>');
fwrite($userMakeReservation, "Make a Reservation");
fwrite($userMakeReservation, $logoContent);
fwrite($userMakeReservation, "</h1><hr><div class=\"nav\"><a href=\"userMakeReservation.html\">Make a Reservation</a> | <a href=\"userViewMenu.html\">View Menu</a> | <a href=\"userOrderTakeout.html\">Order Takeout</a></div><hr>");

$rsrv = "<form action=\"userLandingPage.html\">
    <label for=\"date\">Date: </label>
    <input type=\"text\" id=\"date\"><br><br>
    <label for=\"name\">Name: </label>
    <input type=\"text\" id=\"name\"><br><br>
    <label for=\"time\">Time:</label>
    <input type=\"text\" id=\"time\"><br><br>
    <input type=\"submit\" value=\"Submit\">
</form>";
        
fwrite($userMakeReservation, $rsrv);

fwrite($userMakeReservation, $reservationLink);
fwrite($userMakeReservation, $viewMenuLink);
fwrite($userMakeReservation, $takeoutLink);
fwrite($userMakeReservation, $aboutUsLink);

fwrite($userMakeReservation, "</div></body></html>");
fclose($userMakeReservation);

$userViewMenu = fopen("userViewMenu.html", "w");
fwrite($userViewMenu, '<html><link rel="stylesheet" href="userStyle.css"><body><h1>');
fwrite($userViewMenu, "The Menu");
fwrite($userViewMenu, $logoContent);
fwrite($userViewMenu, "</h1><hr><div class=\"nav\"><a href=\"userMakeReservation.html\">Make a Reservation</a> | <a href=\"userViewMenu.html\">View Menu</a> | <a href=\"userOrderTakeout.html\">Order Takeout</a></div><hr>");

    $con = mysqli_connect('us-cdbr-east-05.cleardb.net', 'b65f216f7d9d91', '91cd1c65', 'heroku_2dce40f70e6cf53');
    $sql = "SELECT itemName, price, description, id FROM tbl_menuItems";
    $rs = mysqli_query($con, $sql);

    fwrite($userViewMenu,
           "<table>
            <thead>
                <tr>
                    <th>Item Name:</th>
                    <th>Price:</th>
                    <th>Description:</th>
                </tr>
            </thead>
        <tbody>");
    if($rs->num_rows > 0){
        while($row = $rs->fetch_assoc()){
            $entry = "<tr><td>" . $row["itemName"] . "</td><td>" . $row["price"] . "</td><td><p class=\"description\">" . $row["description"];
            fwrite($userViewMenu, $entry);
        }
    } else {
        echo "Table is Empty";
    }
fwrite($userViewMenu, "</tbody></table>");

fwrite($userViewMenu, $reservationLink);
fwrite($userViewMenu, $viewMenuLink);
fwrite($userViewMenu, $takeoutLink);
fwrite($userViewMenu, $aboutUsLink);

fwrite($userViewMenu, "</div></body></html>");
fclose($userViewMenu);

$userOrderTakeout = fopen("userOrderTakeout.html", "w");
fwrite($userOrderTakeout, '<html><link rel="stylesheet" href="userStyle.css"><body><h1>');
fwrite($userOrderTakeout, "Order Takeout");
fwrite($userOrderTakeout, $logoContent);
fwrite($userOrderTakeout, "</h1><hr><div class=\"nav\"><a href=\"userMakeReservation.html\">Make a Reservation</a> | <a href=\"userViewMenu.html\">View Menu</a> | <a href=\"userOrderTakeout.html\">Order Takeout</a></div><hr>");

$con = mysqli_connect('us-cdbr-east-05.cleardb.net', 'b65f216f7d9d91', '91cd1c65', 'heroku_2dce40f70e6cf53');
$sql = "SELECT itemName, price, description, id FROM tbl_menuItems";
$rs = mysqli_query($con, $sql);

fwrite($userOrderTakeout,
    "<table>
        <thead>
            <tr>
                <th>Item Name:</th>
                <th>Price:</th>
                <th>Description:</th>
                <th>Quantity:</th>
            </tr>
        </thead>
    <tbody>");
if($rs->num_rows > 0){
    while($row = $rs->fetch_assoc()){
        $entry = "<tr><td>" . $row["itemName"] . "</td><td>" . $row["price"] . "</td><td><p class=\"description\">" . $row["description"] . "</p></td>" . "<td><input type=\"text\" size=\"5\" id=\"" . $row["id"] . "\">" . "</td></tr>";
        fwrite($userOrderTakeout, $entry);
    }
} else {
    echo "Table is Empty";
}
fwrite($userOrderTakeout, "</tbody></table>");
fwrite($userOrderTakeout, '<div class="content"><br><b><a href="userLandingPage.html">Place Order</a></b>');

fwrite($userOrderTakeout, $reservationLink);
fwrite($userOrderTakeout, $viewMenuLink);
fwrite($userOrderTakeout, $takeoutLink);
fwrite($userOrderTakeout, $aboutUsLink);

fwrite($userOrderTakeout, "</div></body></html>");
fclose($userOrderTakeout);

header("Location: userLandingPage.html");
exit;
?>
