<?php
function capital($country){
    switch($country){
        case "France" : return 'Paris';
        case "Allemagne" : return 'Berlin';
        case "Italie" : return 'Rome';
        case "Maroc" : return 'Rabat';
        case "Espagne" : return 'Madrid';
        case "Portugal" : return 'Lisbonne';
        case "Angleterre" : return 'Londres';
        default : return 'Inconnu';
    }
}
?>
