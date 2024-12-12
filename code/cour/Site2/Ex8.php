<?php
   $heure = 14;
   if($heure < 0 || $heure > 23) :
      echo 'Houla, cette heure est incorrecte.';
   elseif($heure >= 7 && $heure < 12) :
      echo 'Bonne matinée.';
   elseif($heure >= 12 && $heure < 22) :
      echo 'Bonne après-midi.';
   else :
      echo 'Bonne nuit.';
   endif;
?>