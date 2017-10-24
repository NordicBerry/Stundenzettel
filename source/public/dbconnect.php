<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "telefonbuch";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create db if none exists
$createDb = "CREATE DATABASE IF NOT EXISTS $dbname";

if(!$conn->query($createDb)) {
    echo "Error: " . $createDb . "<br>" . $conn->error;
}

mysqli_select_db($conn, $dbname);


// Create table if none exists
$createTable = "CREATE TABLE IF NOT EXISTS `Personen` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
)";

if (!$conn->query($createTable)) {
    echo "Error: " . $createTable . "<br>" . $conn->error;
}