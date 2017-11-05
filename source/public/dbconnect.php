<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Stundenzettel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

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
$createTable = "CREATE TABLE IF NOT EXISTS `stundenzettel` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `mitarbeiter` varchar(255) NOT NULL default '',
  `datum` date NOT NULL DEFAULT '',
  `beschreibung` varchar(255) NOT NULL DEFAULT '',
  `projektnummer` int(11) NOT NULL DEFAULT '',
  `uhrzeitvon` time NOT NULL DEFAULT '',
  `uhrzeitbis` time NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
)";

if (!$conn->query($createTable)) {
    echo "Error: " . $createTable . "<br>" . $conn->error;
}
