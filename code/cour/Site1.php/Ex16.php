<?php
    $t = array(1,3,2);
    function plusPetit($t){
        if(count($t)==0){
            return null;
        }
        $G = $t[0];
        for($i=1; $i<count($t); $i++){
            if($t[$i]<$G){
                $G = $t[$i];
            }
        }
        return $G;
        }
?>
