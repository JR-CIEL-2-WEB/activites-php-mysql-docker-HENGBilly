<?php
    $t = array(1,2,3);
    function plusGrand($t){
        if(count($t)==0){
            return null;
        }
        else{
            for($i=0; $i<count($t); $i++){
                if($t[$i-1]<$t[$i]){
                    $G = $i;
                }
            }
            return $t[$G];
        }
    }
?>
