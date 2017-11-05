<?php

require_once('./dbconnect.php');

$id = $_POST["id"];

$sql = "DELETE FROM stundenzettel WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "<script>setTimeout(function() { window.location.replace('http://wt-projekt.test/eintraege.php') }, 1000)</script>";
