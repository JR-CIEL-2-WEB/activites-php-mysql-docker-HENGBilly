<?php

include 'statistique.php';
$tab = [15, 18, 12, 20, 14];

$moyenneNotes = moyenne($tab);

echo "La moyenne des notes est : " . $moyenneNotes;
?>