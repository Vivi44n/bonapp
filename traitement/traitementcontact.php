<?php
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Le nom est requis.";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "L'email est requis.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Format d'email invalide.";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    if (empty($_POST["message"])) {
        $messageErr = "Le message est requis.";
    } else {
        $message = htmlspecialchars($_POST["message"]);
    }

    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        $successMessage = "Message envoyé avec succès !";
    }
}
?>
