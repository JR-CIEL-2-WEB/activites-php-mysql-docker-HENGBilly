<?php
   $prix_ht = 50;
   $tva = 20;
   $prix_ttc = $prix_ht+($prix_ht*($tva/100));
   echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';
?>