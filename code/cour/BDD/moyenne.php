<?php
function moyenne(array $serie): float {
    return array_sum($serie) / count($serie);
}
?>
