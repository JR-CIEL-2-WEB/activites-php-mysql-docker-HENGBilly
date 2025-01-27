<?php
function mediane(array $serie): float {
    sort($serie);
    $count = count($serie);
    $middle = intdiv($count, 2);

    if ($count % 2 === 0) {
        return ($serie[$middle - 1] + $serie[$middle]) / 2;
    } else {
        return $serie[$middle];
    }
}
?>
