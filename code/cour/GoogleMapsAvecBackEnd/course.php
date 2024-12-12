<?php
// Lire le contenu du fichier JSON
$jsonData = file_get_contents('courses.json');
$courses = json_decode($jsonData, true);

// Vérifier si un ID est fourni dans la requête
if (isset($_GET['id'])) {
    $courseId = intval($_GET['id']); // Récupérer et convertir l'ID en entier
    foreach ($courses as $course) {
        if ($course['id'] === $courseId) {
            // Retourner les données de la course en JSON
            header('Content-Type: application/json');
            echo json_encode($course);
            exit;
        }
    }
}

// Si aucune course ne correspond ou si pas d'ID fourni, retourner une erreur
header('Content-Type: application/json', true, 404);
echo json_encode(["error" => "Course not found"]);
