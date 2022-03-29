<?php
// database connection code
if(isset($_POST['userID']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'root','db_diner');

if($mysqli->connect_error){
echo 'Errno: '.$mysqli->connect_errno;
echo '<br>';
echo 'Error: '.$mysqli->connect_error;
}

// get the post records

$userID = $_POST['userID'];
$pword = $_POST['pword'];

// database insert SQL code
$sql = "INSERT INTO `tbl_userInfo` (`id`, `userID`, `pword`) VALUES ('0', '$userID', '$pword')";

// insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
        echo "Contact Records Inserted";
}else{
        echo "Did not insert";
}
}
else
{
        echo "Are you a genuine visitor?";

}
header("Location: homePage.php". "?userID=". $userID);
exit;	
?>
