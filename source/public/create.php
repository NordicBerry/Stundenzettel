<?php

require_once('./dbconnect.php');

$mitarbeiter = $_POST["mitarbeiter"];
$datum = $_POST["datum"];
$beschreibung = $_POST["beschreibung"];
$projektnummer = $_POST["projektnummer"];
$uhrzeitvon = $_POST["uhrzeitvon"];
$uhrzeitbis = $_POST["uhrzeitbis"];

$sql = "INSERT INTO stundenzettel (mitarbeiter, datum, beschreibung, projektnummer, uhrzeitvon, uhrzeitbis) VALUES ('$mitarbeiter', '$datum', '$beschreibung', '$projektnummer', '$uhrzeitvon', '$uhrzeitbis')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


echo "<script>setTimeout(function() { window.location.replace('http://wt-projekt.test/') }, 1000)</script>";
