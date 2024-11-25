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
echo "Tableau initial : " . implode(", ", $t);
$test = tri_selection($t);
tri_selection_ref($t);

echo "<br>Tableau trié par ordre croissant : " . implode(", ", $test);
echo "<br>Tableau trié par ordre croissant (méthode référence) : " . implode(", ", $t);
?>
