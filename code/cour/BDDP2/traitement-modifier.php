<?php
// Inclure le fichier de configuration
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $address = $_POST['address'];

    try {
        // Mettre à jour les informations de l'employé
        $query = "UPDATE employe SET nom = :nom, address = :address WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['nom' => $nom, 'address' => $address, 'id' => $id]);

        echo "Employé modifié avec succès.";
        // Rediriger vers le tableau des salaires après la modification
        header('Location: tableau-salaires.php');
        exit;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "Méthode non autorisée.";
}
?>