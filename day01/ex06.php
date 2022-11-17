<?php
    $Tva=0.20;
    $prix=150;
    $Nombre=10;$HT=$prix*$Nombre;
    $TTC=($prix*$Tva)*$Nombre;
    echo(" le prix HT:".$HT);
    echo"<br>";
    echo("le prix TTC:".$TTC);
?>