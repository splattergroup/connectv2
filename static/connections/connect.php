<?php
#$database_SplatterConnect = "splatter_connect";
#$username_SplatterConnect = "splatter";
#$password_SplatterConnect = "cs11462";
#$hostname_SplatterConnect = "localhost";
$hostname = "localhost";
$database = "connect_v2";
$username = "root";
$password = "";

$connect = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database, $connect);

@ini_set('log_errors','On'); 
@ini_set('display_errors','Off'); 
@ini_set('error_log','logs/php-errors.log');

?>
