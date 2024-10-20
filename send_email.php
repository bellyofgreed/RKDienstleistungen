<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $vorname = htmlspecialchars($_POST['vorname']);

    $name = htmlspecialchars($_POST['name']);

    $email = htmlspecialchars($_POST['email']);

    $nachricht = htmlspecialchars($_POST['nachricht']);

 

    $to = "donaldmichael531@gmail.com";

    $subject = "Neue Nachricht von deiner Website";

    $message = "Vorname: $vorname\nName: $name\nE-Mail: $email\nNachricht:\n$nachricht";

    $headers = "From: $email";

 

    if (mail($to, $subject, $message, $headers)) {

        echo "Nachricht erfolgreich gesendet!";

    } else {

        echo "Fehler beim Senden der Nachricht.";

    }

}

?>