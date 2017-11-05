<?php

require_once('./dbconnect.php');

$mitarbeiter = $_POST["mitarbeiter"];
$datum = $_POST["datum"];
$beschreibung = $_POST["beschreibung"];
$projektnummer = $_POST["projektnummer"];
$uhrzeitvon = $_POST["uhrzeitvon"];
$uhrzeitbis = $_POST["uhrzeitbis"];

$sql = "UPDATE stundenzettel SET mitarbeiter='$mitarbeiter', datum='$datum', beschreibung='$beschreibung', projektnummer='$projektnummer', uhrzeitvon='$uhrzeitvon', uhrzeitbis='$uhrzeitbis' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

<<<<<<< HEAD
echo "<script>setTimeout(function() { window.location.replace('http://wt-projekt.test/index.php') }, 1000)</script>";
=======
echo "<script>setTimeout(function() { window.location.replace('http://wt-projekt.test/eintraege.php') }, 1000)</script>";
>>>>>>> my-temporary-work
