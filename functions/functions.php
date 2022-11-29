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
    return $my_password;
}
