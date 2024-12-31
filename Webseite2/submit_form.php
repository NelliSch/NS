<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "deine.email@domain.de"; // Ersetze mit deiner E-Mail-Adresse
    $subject = "Neue Kontaktanfrage von $name";
    $body = "Name: $name\nHandynummer: $phone\nE-Mail: $email\nNachricht:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Danke, deine Nachricht wurde gesendet!";
    } else {
        echo "Fehler beim Senden der Nachricht. Bitte versuche es erneut.";
    }
}
?>