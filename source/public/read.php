<?php

require_once('./dbconnect.php');

$name = $_GET["name"];

$sql = "SELECT * FROM Personen WHERE INSTR(name, '{$name}') > 0";

$result = $conn->query($sql);

$conn->close();