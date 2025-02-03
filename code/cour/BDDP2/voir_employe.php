<?php
// Connexion à la base de données
$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "root", "");

// Vérifier si un ID est passé en paramètre
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM employes WHERE id = ?");
    $stmt->execute([$id]);
    $employe = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$employe) {
        die("Employé introuvable.");
    }
} else {
    die("ID non spécifié.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Voir Employé</title>
</head>
<body>
    <h2>Détails de l'Employé</h2>
    <p><strong>ID :</strong> <?php echo $employe['id']; ?></p>
    <p><strong>Nom :</strong> <?php echo $employe['nom']; ?></p>
    <p><strong>Adresse :</strong> <?php echo $employe['adresse']; ?></p>
    <a href="employees.php">Retour</a>
</body>
</html>
