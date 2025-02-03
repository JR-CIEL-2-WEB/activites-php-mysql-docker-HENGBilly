<?php
$host = '192.168.60.141:3307'; // Nom ou IP du serveur MySQL
$dbname = 'salaires'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur MySQL
$password = 'root'; // Mot de passe MySQL

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
