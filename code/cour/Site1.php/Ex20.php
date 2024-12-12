<?php
function listHTML($L,$AL){
    if ($L == ""){
        return null;
    }
    elseif(count($AL)==0){
        return null;
    }
    $html = "<h3>" . $L . "</h3><ul>";
    foreach ($AL as $item) {
        $html .= "<li>" . $item . "</li>";
    }
    $html .= "</ul>";
    return $html;
}
?>
