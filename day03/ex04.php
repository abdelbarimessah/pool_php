<?php
    $monfichier = fopen("text.txt","a+");
    if (!($monfichier)) {
        echo "Impossible d'ouvrir le fichier";
        exit ;
    }
    $i=1;
    while($ligne=fgets($monfichier) )
    {
        echo "Ligne numéro $i : $ligne";
        $i++;
    }
    $str = "\nabdelbari";
    fwrite($monfichier, $str);
    copy("text.txt", "text1.text");
    rename("text.txt","abdo.txt");
    fclose($monfichier);
?>