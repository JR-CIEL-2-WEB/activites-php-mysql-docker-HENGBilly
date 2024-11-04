<?php

function moyenne($notes) {
    if (empty($notes)) {
        return 0;
    }
    
    $somme = array_sum($notes); 
    $nombreDeNotes = count($notes); 
    return $somme / $nombreDeNotes;
}
?>