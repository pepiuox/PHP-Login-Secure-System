<?php

include 'error_report.php';
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'truelove');
define('DBNAME', 'php_login');

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

/* If connection fails for some reason */
if ($conn->connect_error) {
    die('Error, Database connection failed: (' . $conn->connect_errno . ') ' . $conn->connect_error);
}
$conn->set_charset('utf8mb4');
require 'function.php';
require 'define.php';

if (!empty(SITE_PATH)) {
    $base = SITE_PATH;
} else {
    $base = 'http://localhost:120/php-login-secure-system/';
}

$fname = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$rname = $fname . '.php';
$alertpg = $_SERVER['REQUEST_URI'];
?>
    
