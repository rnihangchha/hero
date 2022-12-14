<?php
$host = "localhost";
$username = "nihangchha45";
$password = "";
$dbname = "demo";

// Create connection
$mysqli = new mysqli($host, $username ,$password ,$dbname);
//Check connection
if ($mysqli->connect_error) {
    die("connection failed: " . $mysqli->connect_error);
}
return $mysqli;
?>