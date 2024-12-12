<?php
require './libraryToInclude.php';

function getUtilisateursAutorises() {
    $utilisateurs = getAllUtilisateurs();
    $utilisateursAutorises = [];
    
    // Affiche les utilisateurs pour le diagnostic
    var_dump($utilisateurs);
    
    foreach ($utilisateurs as $utilisateur) {
        // Vérifie chaque condition et affiche un message
        if ($utilisateur->blocked) { // Utilise 'blocked' au lieu de 'bloque'
            echo "Utilisateur bloqué: " . ($utilisateur->email ?? 'Email manquant') . "\n";
        } elseif (empty($utilisateur->email)) {
            echo "Email manquant pour l'utilisateur avec l'âge: " . $utilisateur->age . "\n";
        } elseif ($utilisateur->age < 18) {
            echo "Utilisateur de moins de 18 ans: " . ($utilisateur->email ?? 'Email manquant') . "\n";
        } else {
            echo "Utilisateur autorisé: " . $utilisateur->email . "\n";
            $utilisateursAutorises[] = $utilisateur; // Ajoute l'utilisateur autorisé à la liste
        }
    }
    
    // Retourner la liste filtrée des utilisateurs autorisés
    return $utilisateursAutorises;
}

// Tester la fonction
$utilisateursAutorises = getUtilisateursAutorises();
print_r($utilisateursAutorises);
?>
