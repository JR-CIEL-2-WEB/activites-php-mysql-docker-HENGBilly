<?php

include 'statistique.php';
$tab = [15, 18, 12, 20, 14];

$moyenneNotes = moyenne($tab);

echo "La moyenne des notes est : " . $moyenneNotes;
require_once 'statistique.php';

$salaires = [1500, 4500, 2200, 1500, 3300, 1800, 1700, 2000, 4000];
sort($salaires);

echo "Moyenne des salaires : " . moyenne($salaires) . "\n";
echo "Médiane des salaires : " . mediane($salaires) . "\n";
$salaireNicolas = 2200;
if ($salaireNicolas < mediane($salaires)) {
    echo "Nicolas n'est pas dans les moins bien payés de l'entreprise.\n";
} else {
    echo "Nicolas est dans les moins bien payés de l'entreprise.\n";
}
?>