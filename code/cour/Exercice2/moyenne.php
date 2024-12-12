<?php
    function moyenne($mn) {
    $moyenne = 0;  
    foreach( $mn as $mes ) {
     $moyenne+=$mes;
    }
    return 'La moyenne est de '.($moyenne/count($mn)).' / 20.';
}
?>