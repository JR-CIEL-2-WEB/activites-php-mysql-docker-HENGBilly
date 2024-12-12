<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="/assets/css/styles.css"> <!-- Lien vers le fichier CSS -->
</head>
<body>
<?php
// Définir le fuseau horaire
date_default_timezone_set('Europe/Paris'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $prenom = htmlspecialchars($_POST['prénom']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']); // Mot de passe en clair
    $message = htmlspecialchars($_POST['message']);
    $age = isset($_POST['age']) ? "No" : "Yes" ;

    // Préparation des données à stocker
    $newEntry = [
        "name" => $name,
        "prenom" => $prenom,
        "email" => $email,
        "password" => $password, // Stocké en clair pour l'instant (non recommandé)
        "message" => $message,
        "age" => $age
    ];

    // Chemin vers le fichier JSON
    $filePath = 'data.json';

    // Lecture du fichier JSON
    if (file_exists($filePath)) {
        $jsonData = file_get_contents($filePath);
        $data = json_decode($jsonData, true); // Conversion en tableau PHP
    } else {
        $data = [];
    }

    // Vérification si l'email existe déjà²
    $emailExists = false;
    foreach ($data as $entry) {
        if ($entry['email'] === $email) {
            $emailExists = true;
            break;
        }
    }

    if ($emailExists) {
        echo "<h2>Erreur : L'email existe déjà dans la base de données.</h2>";
    } else {
        // Ajout de la nouvelle entrée
        $data[] = $newEntry;

        // Écriture dans le fichier JSON
            if (file_put_contents($filePath, json_encode($data, JSON_PRETTY_PRINT))) {
            echo "
            <div class='container'>
                <div class='icon'>
                    <img src='/img/icon.png' alt='Icon'>
                </div>
                <div class='welcome-message'>
                    <h1>Bienvenue $name $prenom !</h1>
                </div>
            </div>
            ";
        }
        
}
}
?>
