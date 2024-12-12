<?php
    function verificationPassword($pwd) {
        if (strlen($pwd) < 8) {
            return false;
        }
        $hasNumber = false;
        $hasUppercase = false;
        $hasLowercase = false;
        for ($i = 0; $i < strlen($pwd); $i++) {
            $char = $pwd[$i];
            if (is_numeric($char)) {
                $hasNumber = true;
            } elseif (ctype_upper($char)) {
                $hasUppercase = true;
            } elseif (ctype_lower($char)) {
                $hasLowercase = true;
            }
            if ($hasNumber && $hasUppercase && $hasLowercase) {
                return true;
            }
        }
        return false;
    }
    $pwd = "Ab12345678";
    var_dump(verificationPassword($pwd));
?>