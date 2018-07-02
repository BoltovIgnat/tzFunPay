<?php

function parse($strParse)
{
    //Проверка на пустой вход
    if (empty($strParse)) return 'Нет входных данных';

    $strParse = explode("/n", $strParse);
    foreach ($strParse as $value) {
        
        if (preg_match("/Пароль/", $value)) {
            $pass = preg_replace("/[^0-9]/", '', $value);
        } elseif (preg_match("/счет/", $value)) {
            $account = preg_replace("/[^0-9]/", '', $value);
        } elseif (preg_match("/р./", $value)) {
            preg_match_all("/((?:[0-9]+,)*[0-9]+(?:\.[0-9]+)?)/", $value, $amount);
        }

    }

    $rez = [
        "pass" => $pass,
        "account" => $account,
        "amount" => $amount[0][0], 
    ];

    return $rez;
}

?>