<?php

require_once('./dbconnect.php');

$mitarbeiter = $_POST["mitarbeiter"];
$datum = $_POST["datum"];
$beschreibung = $_POST["beschreibung"];
$projektnummer = $_POST["projektnummer"];
$uhrzeitvon = $_POST["uhrzeitvon"];
$uhrzeitbis = $_POST["uhrzeitbis"];

$sql = "SELECT * FROM stundenzettel WHERE INSTR(mitarbeiter, '{$mitarbeiter}', datum, '{$datum}', beschreibung, '{$beschreibung}', projektnummer, '{$projektnummer}', uhrzeitvon, '{$uhrzeitvon}', uhrzeitbis, '{$uhrzeitbis}') > 0";

$result = $conn->query($sql);

$conn->close();
