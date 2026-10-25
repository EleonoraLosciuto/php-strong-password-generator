<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script defer type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    
    <title>Password Generator</title>
</head>
<body>
    <main>

        <div class="container:md d-flex flex-column align-items-center gap-5">

            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>



            <div class="container:md dvw-80">
                <form action="" method="GET" class="md:container">
                    <div class="form-control gap-5">
                        <label for="pw_length">Lunghezza caratteri (min 8):</label>
                        <input type="number" name="pw_length" id="pw_length" min="8" max="16">
                    </div>
                    <div class="d-flex justify-content-start mt-5">
                        <button type="submit">Invia</button>
                    </div>
                </form>
            </div>

            <?php

            function pwGenerate($pw_length) {
                $chars = 'abcdefghijklmnopqrstuvwxyz0123456789!%/&';
                $chars_length = strlen($chars);
                $pw_string = '';

            for ($i = 0; $i < $pw_length; $i++) {
                $selected_char = $chars[random_int(0, ($chars_length - 1))];
                $pw_string .= $selected_char;
            };
            return $pw_string;
            };


            if (isset($_GET['pw_length']) && ($_GET['pw_length'] < 8)) {
                echo "<p class='bg-danger fg-contrast-danger fs-2xl'> Error: password length must be equal or greater than 8 </p>";
            }
        
            if (isset($_GET['pw_length']) && ($_GET['pw_length'] >= 8)) {
            echo "pw length set";
            $random_password = pwGenerate($_GET['pw_length']);
            echo "<p> la tua password: $random_password </p>" ;
            }
        ?>
        
        </div>
    </main>
</body>
</html>