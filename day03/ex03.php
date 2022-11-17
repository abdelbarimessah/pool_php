<?php

    $nom = $_POST["nom"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $address_mail = $_POST["address_mail"];
    $tele = $_POST["tele"];


    if(preg_match("/[[:alnum:]_-]{4,32}/", $nom))
        echo ("$nom nom valide<br>");
    else
        echo ("$nom nom invalide<br>");
    if(preg_match("/[[0-9]]{1,2}[[0-9]]{0,2}/", $age))
        echo ("$age age valide<br>");
    else
        echo ("$age age invalide<br>");
    if(preg_match("/^(w{3}).[[:alnum:]]{2,20}.[[:alpha:]]{2,4}$/", $address))
        echo ("$address address valide<br>");
    else
        echo ("$address address invalide<br>");
    if(preg_match("/^[[:alpha:]]{5,20}@[[:alpha:]]{4,10}.[[:alpha:]]{2,4}$/", $address_mail))
        echo ("$address_mail address mail valide<br>");
    else
        echo ("$address_mail address mail invalide<br>");
    if(preg_match("/^06|5[[:digit:]]{8}/", $tele))
        echo ("$tele tele valide<br>");
    else
        echo ("$tele tele invalide<br>");
?>