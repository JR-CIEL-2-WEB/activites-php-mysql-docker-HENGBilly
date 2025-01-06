<?php
// Informations de connexion à la base de données
$host = 'mysql';        // Hôte de la base de données (local si tu travailles en local)
$dbname = 'appdb'; // Remplace par le nom de ta base de données
$username = 'eleve';        // Nom d'utilisateur MySQL
$password = 'eleve';        // Mot de passe MySQL


try {
    // Création de la connexion avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
   
    // Configuration de PDO pour générer des exceptions en cas d'erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    echo "Connexion réussie à la base de données.";
} catch (PDOException $e) {
    // Gestion de l'erreur en cas de problème de connexion
    echo "Erreur de connexion : " . $e->getMessage();
}
?>



