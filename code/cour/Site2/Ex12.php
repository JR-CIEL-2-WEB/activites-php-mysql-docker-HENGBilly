<?php
   $k = 0;
   while($k <= 20) {
      if($k == 10) {
         echo '<strong>'.$k.'</strong>';	  
      } else {
         echo $k;
      }
      echo '<br />';
      $k = $k + 2;
   }
?>