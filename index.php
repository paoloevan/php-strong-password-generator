<!-- Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
-->
<?php

function generatePassword($lenpass)
{
    $my_password = '';
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $len_characters = strlen($characters);
    $characters_upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $len_characters_upper = strlen($characters_upper);
    $symbols = '!"£$%&/()=?^:;,.-_<>';
    $len_symbols = strlen($symbols);

    for ($i = 0; strlen($my_password) < $lenpass; $i++) {
        $my_password .= rand(0, 9);
        $my_password .= $characters[rand(0, $len_characters - 1)];
        $my_password .= $characters_upper[rand(0, $len_characters_upper - 1)];
        $my_password .= $symbols[rand(0, $len_symbols - 1)];
    }
    $my_password = substr($my_password, 0, $lenpass);
    return var_dump($my_password);
}

generatePassword((int)$_GET['password_length']);
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