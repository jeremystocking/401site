<?php
// database connection code
if(isset($_POST['userID']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
//$con = mysqli_connect('localhost', 'root', 'root','db_diner');
$con = mysqli_connect('us-cdbr-east-05.cleardb.net', 'b65f216f7d9d91', '91cd1c65', 'heroku_2dce40f70e6cf53');
if($mysqli->connect_error){
echo 'Errno: '.$mysqli->connect_errno;
echo '<br>';
echo 'Error: '.$mysqli->connect_error;
}

// get the post records
$userID = $_POST['userID'];
$pword = $_POST['pword'];
$failDestination = "Location: index.php";
$successDestination = "Location: homePage.php";
$success = FALSE;
$sql = "SELECT * FROM tbl_userInfo WHERE userID = '$userID' AND pword = '$pword'";

$rs = mysqli_query($con, $sql);

if($rs)
{
        //Query return 0 - infinity results
	if($rs->num_rows > 0){
		while($row = mysqli_fetch_assoc($rs)) {
			echo "id: ". $row["id"]. " - UserID: ". $row["userID"]. " - Password: ". $row["pword"]. "<br>"; 
			$success = TRUE;
		}
	} else {
		//Query returned 0 results
		Header($failDestination . "?message=User ID or password is invalid");
        	exit;
	}
	
}else{
        //Query did not succeed.
}
}
else
{
        //userID was not set
}
if($success){
	session_start();
	$_SESSION["userID"] = $userID;
	Header($successDestination . "?userID=" . $userID);
	exit;
}
?>
