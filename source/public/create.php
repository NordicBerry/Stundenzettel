<?php

require_once('./dbconnect.php');

$name = $_POST["name"];
$phone = $_POST["phone"];

$sql = "INSERT INTO Personen (name, phone) VALUES ('$name', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


echo "<script>setTimeout(function() { window.location.replace('http://localhost/telefonbuch') }, 1000)</script>";