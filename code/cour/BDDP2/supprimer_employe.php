<?php
$pdo = new PDO("mysql:host=localhost;dbname=entreprise", "root", "");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("DELETE FROM employes WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: employees.php");
} else {
    die("ID non spécifié.");
}
?>
