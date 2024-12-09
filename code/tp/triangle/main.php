<?php
function triangle($n){
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "</br>";
    }
}

if (isset($_GET['n'])) {
    $n = intval($_GET['n']);
    triangle($n);
}

?>