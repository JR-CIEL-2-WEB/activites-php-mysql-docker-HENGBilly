<?php
    $age = $_POST['age'];
    function estIlMajeure($age){
        if($age <= 17){
            return False;
        }
        else{
            return True;
        }
    }
?>
