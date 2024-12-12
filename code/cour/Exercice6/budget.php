<?php
function budget($achats, $budget){
    if ($achats > $budget) {
        return false;
        } else {
        return true;
        }
}
?>
