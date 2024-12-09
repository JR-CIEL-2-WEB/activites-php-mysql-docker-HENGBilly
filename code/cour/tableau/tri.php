<?php
// Fonction de tri par sélection
function tri_selection($t) {
    $n = count($t);
    for ($i = 0; $i < $n - 1; $i++) { 
        $min = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($t[$j] < $t[$min]) {
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp = $t[$i];
            $t[$i] = $t[$min];
            $t[$min] = $temp;
        }
    }
    return $t;
}

// Vérifier si des données sont envoyées
$data = json_decode(file_get_contents('php://input'), true);

if ($data && isset($data['numbers']) && is_array($data['numbers'])) {
    // Trier les nombres envoyés
    $sortedNumbers = tri_selection($data['numbers']);
    // Retourner la réponse en JSON avec les nombres triés
    echo json_encode(['sorted' => $sortedNumbers]);
} else {
    // Si les données ne sont pas valides, retourner une erreur
    echo json_encode(['error' => 'Données invalides ou manquantes']);
}
?>
