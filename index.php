<!-- Verificato il corretto funzionamento del nostro codice,
spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
-->
<?php

include __DIR__ . '/functions/functions.php';

$new_password = generatePassword((int)$_GET['password_length'], $_GET['numbers'], $_GET['characters'], $_GET['symbols']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password generator</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
</head>

<body>
    <h1 class="text-center my-2 text-primary">Strong password generator</h1>
    <h3 class="text-center my-2 ">Genera una password sicura</h3>
    <div class="container py-5">
        <form action="index.php" method="GET" class="form">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="password_length" class="col-form-label">Lunghezza password:</label>
                </div>
                <div class="col-auto">
                    <input type="number" id="password_length" name="password_length" class="form-control" aria-describedby="passwordHelpInline">
                </div>

                <div class="col-auto">
                    <button class=" btn btn-primary" type="submit">Invia</button>
                </div>
                <div id="passwordHelpInline" class="form-text col-auto">
                    Nuova password: <?= $new_password ?>
                </div>
                <div>
                    <input type="checkbox" name="numbers" id="numbers">
                    <label for="numbers">Numeri</label>
                </div>
                <div>
                    <input type="checkbox" name="characters" id="characters">
                    <label for="characters">Lettere</label>
                </div>
                <div>
                    <input type="checkbox" name="symbols" id="symbols">
                    <label for="symbols">Simboli</label>
                </div>
            </div>
        </form>
    </div>
</body>

</html>