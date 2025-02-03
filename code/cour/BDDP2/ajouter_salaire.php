<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_employe = $_POST['id_employe'] ?? '';
    $salaire = $_POST['salaire'] ?? '';

    // Connexion à la base de données (ajuster les paramètres selon votre configuration)
    $conn = new mysqli("localhost", "root", "", "gestion_employes");

    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }

    // Insérer le salaire
    $sql = "INSERT INTO salaires (id_employe, salaire) VALUES ('$id_employe', '$salaire')";

    if ($conn->query($sql) === TRUE) {
        echo "Salaire ajouté avec succès";
    } else {
        echo "Erreur: " . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Salaire</title>
</head>
<body>
    <h2>Ajouter un Salaire</h2>
    <form method="POST" action="">
        <label>ID Employé:</label>
        <input type="number" name="id_employe" required><br>
        <label>Salaire:</label>
        <input type="number" name="salaire" required><br>
        <button type="submit">Ajouter</button>
    </form>
    <br>
    <a href="employees.php">Retour</a>
</body>
</html>
