<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulardaten sicher empfangen und validieren
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);

    // Ziel-E-Mail-Adresse (ersetzen mit deiner)
    $to = "deine.email@domain.de";
    $subject = "Neue Terminbuchung von $name";
    $message = "Name: $name\nHandynummer: $phone\nE-Mail: $email\nDatum: $date\nUhrzeit: $time";

    $headers = "From: $email";

    // E-Mail senden
    if (mail($to, $subject, $message, $headers)) {
        echo "Danke, dein Termin wurde gebucht!";
    } else {
        echo "Fehler beim Buchen des Termins. Bitte versuche es erneut.";
    }
}
?>