<?php
    $t = array(1,2,3);
    function dernierElementTableau($t){
        if(count($t)==0){
            return null;
        }
        else{
            return $t[count($t)-1];
        }
    }
?>
