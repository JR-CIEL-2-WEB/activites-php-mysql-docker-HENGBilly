<?php
function tri_selection($t){
    $n = count($t);
    for($i = 0; $i < $n - 1; $i++){ 
        $min = $i;
        for($j = $i + 1; $j < $n; $j++){
            if($t[$j] < $t[$min]){
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp = $t[$i];
            $t[$i] = $t[$min];
            $t[$min] = $temp;
        }
    }
    return $t; 
}
function tri_selection_ref(&$t){
    $n = count($t);
    for($i = 0; $i < $n - 1; $i++){ 
        $min = $i;
        for($j = $i + 1; $j < $n; $j++){
            if($t[$j] < $t[$min]){
                $min = $j;
            }
        }
        if ($min != $i) {
            $temp = $t[$i];
            $t[$i] = $t[$min];
            $t[$min] = $temp;
        }
    }

}
$t = [5, 3, 8, 2, 9, 1, 7, 4, 6];
$test = tri_selection($t);

echo "Tableau trié par ordre croissant : " . implode(", ", $test);
?>
