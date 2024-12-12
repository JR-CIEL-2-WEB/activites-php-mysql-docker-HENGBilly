<?php
function triangle($nb){
    for ($i=0; $i<=$nb; $i++){
        for ($j=0; $j<$i; $j++){
            echo "*";
        }
        echo "<br>";
    }
}
triangle(19);
?>