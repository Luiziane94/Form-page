<?php
// Database configuration
$dbHost = "localhost";
$dbUsername = "luiziane";
$dbPassword = "";
$dbName = "forum_db";


// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


// Check connection
if ($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}
?>
