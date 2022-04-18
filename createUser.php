<?php
// database connection code
if(isset($_POST['userID']))
{
//$con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('us-cdbr-east-05.cleardb.net', 'b65f216f7d9d91', '91cd1c65', 'heroku_2dce40f70e6cf53');

//$cleardb_url = parse_url(getenv("mysql://b65f216f7d9d91:91cd1c65@us-cdbr-east-05.cleardb.net/heroku_2dce40f70e6cf53?reconnect=true"));
//$cleardb_server = $cleardb_url["host"];
//$cleardb_username = $cleardb_url["user"];
//$cleardb_password = $cleardb_url["password"];
//$cleardb_db = substr($cleardb_url["path"],1);$active_group = 'default';
//$query_builder = TRUE;
// Connect to DB
//$con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

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
        session_start();
        $_SESSION["userID"] = $userID;
        $_SESSION["loggedIn"] = "true";
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
