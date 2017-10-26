<?php

session_start();
session_destroy();

echo "Logout erfolgreich";

echo "<script>setTimeout(function() { window.location.replace('http://wt-projekt.test/login.php') }, 1000)</script>";
?>
