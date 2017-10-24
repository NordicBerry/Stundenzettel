<?php

require_once('./dbconnect.php');

$id = $_POST["id"];

$sql = "DELETE FROM Personen WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "<script>setTimeout(function() { window.location.replace('http://localhost/telefonbuch') }, 1000)</script>";