<?php
    $int1 = $_POST["Premier chiffre/nombre"];
    $int2 = $_POST["Deuxième shiffre/nombre"];
    function plusGrand($int1, $int2){
        if($int1 < $int2){
            return $int2;
        }
        else{
            return $int1;
        }
    }
?>
