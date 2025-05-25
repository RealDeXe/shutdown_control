<?php
$motDePasseCorrect = "1234"; // make ur special password

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'] ?? '';

    if ($password === $motDePasseCorrect) {
        exec("shutdown -s -t 0");
        echo "✅ Arrêt du PC lancé.";
    } else {
        echo "❌ Mot de passe incorrect.";
    }
} else {
    echo "Requête non autorisée.";
}
?>

#https://<ur-ipconfig>//shutdown_control.php/index.html
