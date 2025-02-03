<?php
require_once 'config.php';
require_once 'mediane.php';
require_once 'moyenne.php';
require_once 'tri_selection.php';

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
?>
