<?php
function pwGenerate($pw_length, $repetition, $lettere, $numeri, $simboli) {
                $chars = '';
                
                if ($lettere) {
                    $chars .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHILMNOPQRSTUVWXYZ';
                 };

                 if ($numeri) {
                    $chars .= '0123456789';
                 };
                
                if ($simboli) {
                    $chars .= '!%/&';
                };
                
                if (!$lettere && !$numeri && !$simboli ) {
                    $chars .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHILMNOPQRSTUVWXYZ';
                };
                
                $chars_length = strlen($chars);
                $pw_string = '';

            if ($repetition) {

                for ($i = 0; $i < $pw_length; $i++) {
                    $selected_char = $chars[random_int(0, ($chars_length - 1))];
                    $pw_string .= $selected_char;
                };
            };

            if (!($repetition)) {
                while (strlen($pw_string) < $pw_length) {
                    $selected_char = $chars[random_int(0, ($chars_length - 1))];
                    if (!str_contains($pw_string, $selected_char)) {
                        $pw_string .= $selected_char;
                    };
                };
            };
            return $pw_string;
            };

?>
