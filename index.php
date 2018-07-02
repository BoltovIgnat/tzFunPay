<?php
    include_once("tz.php");
    $rez = parse("Пароль: 4293/n
    Спишется 1,01р./n
    Перевод на счет 410014764528398/n");
    print_r($rez);
?>