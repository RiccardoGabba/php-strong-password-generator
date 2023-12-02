<?php 
function random_password($lower, $upper, $numbers, $special_characters){
    $lower_case ="abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $digits = "0123456789";
    $symbols = "!@#$%&";

    $lower_case = str_shuffle($lower_case);
    $upper_case = str_shuffle($upper_case);
    $digits = str_shuffle($digits);
    $symbols = str_shuffle($symbols);

    //$random_characters = 2;

    $random_password = substr ($lower_case, 0, $lower);
    $random_password .= substr ($upper_case, 0  , $upper);
    $random_password .= substr ($digits, 0  , $numbers);
    $random_password .= substr ($symbols, 0  , $special_characters);

    return str_shuffle($random_password);
}

echo random_password(3, 2, 3, 2);




?>