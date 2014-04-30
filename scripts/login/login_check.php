<?php
$email = $_POST['inputEmail'];
$password = $_POST['inputPassword'];
//connect to the database here
require_once('../Connections/SplatterConnect.php');

$query = "SELECT hash, salt, status, group_id, user_id FROM users_main WHERE email = '$email';";
$result = mysql_query($query);

if(mysql_num_rows($result) < 1) //no such user exists
{
	echo "No User";
	header ('Location: ../login.php?error=NoUser');
	die(); 
}

$userData = mysql_fetch_array($result, MYSQL_ASSOC);
print_r($userData);
$hashing = hash('sha256', $userData['salt'] . hash('sha256', $password) );
if($hashing != $userData['hash']) //incorrect password
{
    echo "Incorrect Password";
	header ('Location: ../login.php?error=IncorrectPassword');
	die(); 
}
else
{
	session_start(); //must call session_start before using any $_SESSION variables
	$_SESSION['valid'] = 1;
	$_SESSION['userid'] = $userData['user_id'];
	$_SESSION['userstatus'] = $userData['status'];
	$_SESSION['lang'] = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	$sql= 	"INSERT INTO
			users_usage
			(time_logged_in, user_id) VALUES (NOW(),'".$_SESSION['userid']."');";
	$result = mysql_query($sql) or die(mysql_error());
	$_SESSION['sessionid'] = mysql_insert_id();
}

header ('Location: ../');

?>
