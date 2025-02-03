<?php
$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "root", "");

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];

    $stmt = $pdo->prepare("UPDATE employes SET nom = ?, adresse = ? WHERE id = ?");
    $stmt->execute([$nom, $adresse, $id]);

    header("Location: employees.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier Employé</title>
</head>
<body>
    <h2>Modifier un Employé</h2>
    <form method="post">
        <label>Nom :</label>
        <input type="text" name="nom" value="<?php echo $employe['nom']; ?>" required>
        <br>
        <label>Adresse :</label>
        <input type="text" name="adresse" value="<?php echo $employe['adresse']; ?>" required>
        <br>
        <button type="submit">Modifier</button>
    </form>
    <a href="employees.php">Annuler</a>
</body>
</html>
