<?php

require_once('./dbconnect.php');

$id = $_POST["id"];
$name = $_POST["name"];
$phone = $_POST["phone"];

$sql = "UPDATE Personen SET name='$name', phone='$phone' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "<script>setTimeout(function() { window.location.replace('http://wt-projekt.test/eintraege.php') }, 1000)</script>";
