<?php
    $int1 = $_POST["Premier chiffre/nombre"];
    $int2 = $_POST["Deuxième shiffre/nombre"];
    $int3 = $_POST["Troisième shiffre/nombre"];
    function plusPetit($int1, $int2, $int3){
        if ($int1 < $int2 && $int1 < $int3){
            return $int1;
        }
        elseif($int2 < $int1 && $int2<$int3){
            return $int2;
        }
        else{
            return $int3;
        }
    }
?>
