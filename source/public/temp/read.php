<?php

require_once('./dbconnect.php');

$mitarbeiter = $_GET["mitarbeiter"];
$datum = $_GET["datum"];
$beschreibung = $_GET["beschreibung"];
$projektnummer = $_GET["projektnummer"];
$uhrzeitvon = $_GET["uhrzeitvon"];
$uhrzeitbis = $_GET["uhrzeitbis"];

$sql = "SELECT * FROM stundenzettel WHERE INSTR(mitarbeiter, '{$mitarbeiter}', datum, '{$datum}', beschreibung, '{$beschreibung}', projektnummer, '{$projektnummer}', uhrzeitvon, '{$uhrzeitvon}', uhrzeitbis, '{$uhrzeitbis}') > 0";

$result = $conn->query($sql);

$conn->close();
