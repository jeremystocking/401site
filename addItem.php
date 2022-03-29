<?php

if($_POST['itemName'] == '' || $_POST['price'] == '' || $_POST['description'] == '')
{
	Header("Location: createMenu.php?message=Please fill out the entire form");
	exit;
} else {
	$con = mysqli_connect('localhost', 'root', 'root','db_diner');
}

$itemName = $_POST['itemName'];
$price = $_POST['price'];
$description = $_POST['description'];

$sql = "INSERT INTO `tbl_menuItems` (`id`, `itemName`, `price`, `description`) VALUES ('0', '$itemName', '$price', '$description')";

$rs = mysqli_query($con, $sql);

if($rs)
{	
	Header("Location: createMenu.php?tableName=tb_menuItems");
	exit;
} else {
	echo "Unsuccessful";
}

?>
