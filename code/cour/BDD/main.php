<?php
require_once 'config.php';
require_once 'mediane.php';
require_once 'moyenne.php';
require_once 'tri_selection.php';

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les salaires de la colonne `Salaire`
    $query = $pdo->query("SELECT Salaire FROM Salaires");
    $salaires = $query->fetchAll(PDO::FETCH_COLUMN);

    if (empty($salaires)) {
        throw new Exception("Aucun salaire trouvé dans la base de données.");
    }

    // Appliquer les fonctions
    $moyenne = moyenne($salaires);
    $mediane = mediane($salaires);
    $salaires_tries = $salaires; // Copier les salaires pour le tri
    tri_selection($salaires_tries);

    // Afficher les résultats
    echo "Moyenne des salaires : $moyenne<br>";
    echo "Médiane des salaires : $mediane<br>";
    echo "Salaires triés : " . implode(', ', $salaires_tries) . "<br>";
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
