<?php
// Inclure le fichier de configuration
include 'config.php';

// Vérifier si l'ID de l'employé est passé en paramètre
if (isset($_GET['id'])) {
    $id_employee = $_GET['id'];

    try {
        // Récupérer les informations de l'employé
        $query = "SELECT * FROM employe WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['id' => $id_employee]);
        $employe = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($employe) {
            // Afficher le formulaire de modification
            echo "<!DOCTYPE html>
            <html lang='fr'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Modifier Employé</title>
            </head>
            <body>
                <h1>Modifier Employé</h1>
                <form action='traitement-modifier.php' method='post'>
                    <input type='hidden' name='id' value='{$employe['id']}'>
                    <label for='nom'>Nom :</label>
                    <input type='text' id='nom' name='nom' value='{$employe['nom']}' required><br><br>
                    <label for='address'>Adresse :</label>
                    <input type='text' id='address' name='address' value='{$employe['address']}' required><br><br>
                    <button type='submit'>Enregistrer</button>
                </form>
            </body>
            </html>";
        } else {
            echo "Employé non trouvé.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} else {
    echo "ID de l'employé non spécifié.";
}
?>