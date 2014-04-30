<?php
require_once('static/connections/connect.php');

//connect to the database and classes
include 'models/database.class.php';
include 'models/categories.class.php';
include 'models/languages.class.php';

include 'models/functions.php';
// Define configuration
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "connect_v2");


// Instantiate database
$database = new Database();
?>