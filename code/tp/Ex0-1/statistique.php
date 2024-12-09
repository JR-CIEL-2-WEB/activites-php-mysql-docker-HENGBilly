<?php

function moyenne($notes) {
    if (empty($notes)) {
        return 0;
    }
    
    $somme = array_sum($notes); 
    $nombreDeNotes = count($notes); 
    return $somme / $nombreDeNotes;
}
function mediane($tab){
    $n = count($tab);
    sort($tab);
    
    if ($n % 2 == 0) {
        $milieu1 = floor($n / 2) - 1;
        $milieu2 = floor($n / 2);
        return ($tab[$milieu1] + $tab[$milieu2]) / 2;
    } else {
        $milieu = floor($n / 2);
        return $tab[$milieu];
    }
}
?>