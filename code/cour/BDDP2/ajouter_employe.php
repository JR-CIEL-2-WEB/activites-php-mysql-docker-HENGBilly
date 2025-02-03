<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'] ?? '';
    $adresse = $_POST['adresse'] ?? '';

    // Connexion à la base de données (ajuster les paramètres selon votre configuration)
    $conn = new mysqli("localhost", "root", "", "gestion_employes");

    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }

    // Insérer l'employé
    $sql = "INSERT INTO employes (nom, adresse) VALUES ('$nom', '$adresse')";

    if ($conn->query($sql) === TRUE) {
        echo "Employé ajouté avec succès";
    } else {
        echo "Erreur: " . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Employé</title>
</head>
<body>
    <h2>Ajouter un Employé</h2>
    <form method="POST" action="">
        <label>Nom:</label>
        <input type="text" name="nom" required><br>
        <label>Adresse:</label>
        <input type="text" name="adresse" required><br>
        <button type="submit">Ajouter</button>
    </form>
    <br>
    <a href="employees.php">Retour</a>
</body>
</html>
