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
        	<header><title>Create Menu</title></header>
	</h1>
	<div class="banner">
		<div class="logo">
			<img src = "logo.png">
		</div>
	</div>
	<h4>
                <a href="homePage.php" class="left" title="Home">
                <img src="homeIcon.png" alt="Home Icon" width="50" height="50">
                </a>
        
        <a href="createSite.php">Back to Create Site</a>

		<a href="signOut.php" class="right" title="Sign Out">
                <img src="signOutIcon.png" alt="Sign Out Icon" width="50" height="50">
                </a>
	</h4>

	<h2>
		Create Menu Page
	</h2>

	 <div id="warning"> <?php echo $_GET['message']; ?> </div>	
	<h5>
		Add an item to your menu:<br>
		<form method="post" action="addItem.php">
                        <label for="itemName">Item Name:</label>
                        <input class="cave" type="text" id="itemName" name="itemName"><br><br>
                        <label for="price">Price: $</label>
                        <input class="cave" type="text" id="price" name="price"><br><br>
			<label for="description">Description:</lable>
			<input class="cave" type="text" id="description" name="description"><br><br>

                        <input class="cvex" type="submit" name="Add Item" id="addItem" value="Add Item">
                </form>
	</h5>	
	<h5>

		<?php
			$con = mysqli_connect('us-cdbr-east-05.cleardb.net', 'b65f216f7d9d91', '91cd1c65', 'heroku_2dce40f70e6cf53');
			$sql = "SELECT itemName, price, description, id FROM tbl_menuItems";
			$rs = mysqli_query($con, $sql);
		?>
		Menu:
		<table id="menuItems">
			<thead>
				<tr>
					<th>Item Name:</th>
					<th>Price:</th>
					<th>Description:</th>
                    <th>X</th>
				</tr>
			</thead>
		<tbody>
		<?php
			if($rs->num_rows > 0){
				while($row = $rs->fetch_assoc()){
					echo "<tr><td>" . $row["itemName"] . "</td><td>" . $row["price"] . "</td><td><p class=\"description\">" . $row["description"]  . "</p></td><td><a href=\"removeItem.php?id=" . $row["id"] . "\">X</a></td></tr>";
				}
			} else {
				echo "Table is Empty";
			}	
		?>
		</tbody>
		</table>

	</h5>
    <div id="footer">
                <li class="first">(c)Jeremy Stocking</li>
                <li>Boise State University</li>
                <li>College of Engineering</li>
                <li>Computer Science Student</li>
    </div>

    </body>
</html>
