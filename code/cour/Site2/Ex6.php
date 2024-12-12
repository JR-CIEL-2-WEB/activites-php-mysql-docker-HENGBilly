<?php
   $budget = 1553.89;
   $achats = 1554.76;
   if($budget >= $achats) :
      echo 'Le budget ('.$budget.' €) permet de payer tous les achats ('.$achats.' €).';
   else :
      echo 'Le budget ('.$budget.' €) ne permet pas de payer tous les achats ('.$achats.' €).';
   endif;
?>