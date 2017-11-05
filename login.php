<!DOCTYPE html>

<?php
    session_start();

    $_logindaten = ARRAY("abteilung" => "Entwicklung", "name"=>"admin", "passwort"=>"12345");

    if (isset($_POST["loginabteilung"]) && isset($_POST["loginname"]) && isset($_POST["loginpasswort"]))
        {
        if ($_logindaten["abteilung"] == $_POST["loginabteilung"] &&
            $_logindaten["name"] == $_POST["loginname"] &&
            $_logindaten["passwort"] == $_POST["loginpasswort"])
            {
            # Userdaten korrekt - User ist eingeloggt
            # Login merken !
            $_SESSION["login"] = 1;
            }
        }

    if ($_SESSION["login"] != 1)
        {
        include("login-formular.html");
        exit;
        }

    # User ist eingeloggt
?>
