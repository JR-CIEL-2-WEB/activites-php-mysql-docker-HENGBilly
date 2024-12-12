<?php
include ('budget.php');
$budget = 1000;
$achats = 500;
$resultat = budget($achats, $budget);
echo $resultat ? 'true' : 'false';
?>