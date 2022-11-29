<!-- Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php -->
<?php
var_dump((int)$_GET['password_length']);

function generatePassword($passlen)
{
}
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
                    <span id="passwordHelpInline" class="form-text">
                        Must be 8-20 characters long.
                    </span>
                </div>
                <div class="col-auto">
                    <button class=" btn btn-primary" type="submit">Invia</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>