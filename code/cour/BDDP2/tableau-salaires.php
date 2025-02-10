<?php
// Inclure le fichier de configuration
include 'config.php';

try {
    // Requête SQL corrigée
    $query = "
        SELECT e.id_employe AS id_employe, e.nom, e.address, s.salaire
        FROM employe e
        JOIN salaire s ON e.id_employe = s.employe_id
    ";

    // Exécution de la requête
    $stmt = $pdo->query($query);

    // Début du tableau HTML
    echo "<!DOCTYPE html>
    <html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Tableau des Salaires</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
            .action-buttons {
                display: flex;
                gap: 5px;
            }
            .action-buttons a {
                padding: 5px 10px;
                text-decoration: none;
                border-radius: 3px;
                display: inline-block;
            }
            .modifier {
                background-color: #4CAF50;
                color: white;
            }
            .supprimer {
                background-color: #f44336;
                color: white;
            }
        </style>
    </head>
    <body>
        <h1>Tableau des Salaires</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Salaire</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>";

    // Vérification des résultats
    if ($stmt->rowCount() == 0) {
        echo "<tr><td colspan='5'>Aucun employé trouvé.</td></tr>";
    } else {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
                    <td>{$row['id_employe']}</td>
                    <td>{$row['nom']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['salaire']}</td>
                    <td>
                        <div class='action-buttons'>
                            <a href='modifier-employe.php?id={$row['id_employe']}' class='modifier'>Modifier</a>
                            <a href='supprimer-employe.php?id={$row['id_employe']}' class='supprimer' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cet employé ?\");'>Supprimer</a>
                        </div>
                    </td>
                  </tr>";
        }
    }

    // Fin du tableau HTML
    echo "</tbody>
        </table>
    </body>
    </html>";

} catch (PDOException $e) {
    echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
}
?>
