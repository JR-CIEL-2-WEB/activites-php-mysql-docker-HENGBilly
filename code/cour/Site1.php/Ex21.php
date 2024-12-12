<?php
function remplacerLesLettres($p){
    $p = str_replace('e', '3', $p);
    $p = str_replace('i', '1', $p);
    $p = str_replace('o', '0', $p);

    return $p;
}

?>