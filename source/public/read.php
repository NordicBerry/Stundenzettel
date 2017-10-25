<?php

require_once('./dbconnect.php');

$name = $_GET["mitarbeiter"];

$sql = "SELECT * FROM stundenzettel WHERE INSTR(mitarbeiter, '{$mitarbeiter}') > 0";

$result = $conn->query($sql);

$conn->close();
