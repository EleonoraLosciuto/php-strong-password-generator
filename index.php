<?php
    session_start();

    include_once './functions.php';

    if (isset($_GET['pw_length']) && (($_GET['pw_length'] < 8) || ($_GET['pw_length'] > 15))) {
        echo "<p class='bg-danger fg-contrast-danger fs-2xl'> Error: password length must be equal or greater than 8 and less or equal to 15 </p>";
    };
        
    if (isset($_GET['pw_length']) && ($_GET['pw_length'] >= 8) && ($_GET['pw_length'] <= 15)) {
        $repetition = ($_GET['repetition'] === 'true');
        $lettere = isset($_GET['lettere']);
         $numeri = isset($_GET['numeri']);
        $simboli = isset($_GET['simboli']);

        $random_password = pwGenerate($_GET['pw_length'], $repetition, $lettere, $numeri, $simboli);

        $_SESSION['password_result'] = $random_password;
        header('Location:result.php');
        exit();
    };
?>

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



            <div class="container dvw-80 border p-4">
                <form action="" method="GET" class="lg:container">
                    <div class="form-control gap-5 justify-content-between mb-5">
                        <label for="pw_length">Lunghezza caratteri (min 8):</label>
                        <input type="number" name="pw_length" id="pw_length" min="8" max="15">
                    </div>
                    <div class="form-control gap-5 justify-content-between mb-5">
                        <label for="repetition">Consenti ripetizioni di uno o piú caratteri:</label>
                        <div class="radio-options">
                            <input type="radio" name="repetition" id="repetition_yes" value="true" checked="checked">
                            <label for="repetition_yes">Sí</label>
                            <input type="radio" name="repetition" id="repetition_no" value="false">
                            <label for="repetition_no">No</label>
                        </div>
                    </div>
                        <div class="checkbox-chars d-flex justify-content-between form-control mb-5">

                            <div class="selezione-checkbox">Caratteri permessi:</div>

                            <div>
                                <div>
                                    <input type="checkbox" name="lettere" id="lettere">
                                    <label for="lettere">Lettere</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="numeri" id="numeri">
                                    <label for="numeri">Numeri</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="simboli" id="simboli">
                                    <label for="simboli">Simboli</label>
                                </div>
                            </div>

                        </div>
                    
                    <div class="d-flex justify-content-start mt-5">
                        <button type="submit">Invia</button>
                    </div>
                </form>
            </div>
        
        </div>
    </main>
</body>
</html>