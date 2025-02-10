<?php
// Inclure le fichier de configuration
include 'config.php';

// Vérifier si l'ID de l'employé est passé en paramètre
if (isset($_GET['id'])) {
    $id_employee = $_GET['id'];

    try {
        // Supprimer l'employé
        $query = "DELETE FROM employe WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['id' => $id_employee]);

        echo "Employé supprimé avec succès.";
        // Rediriger vers le tableau des salaires après la suppression
        header('Location: tableau-salaires.php');
        exit;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "ID de l'employé non spécifié.";
}
?>