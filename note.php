
            if (isset($_GET['pw_length']) && ($_GET['pw_length'] >= 8) && ($_GET['pw_length'] <= 15)) {
            
            $lettere = isset($_GET['lettere']);
            $numeri = isset($_GET['numeri']);
            $simboli = isset($_GET['simboli']);
            var_dump($lettere);
            var_dump($numeri);
            var_dump($simboli);
            }