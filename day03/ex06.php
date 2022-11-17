<?php
	$monfichier = fopen("ex06.txt","a+");
	if (!($monfichier)) {
        echo "Impossible d'ouvrir le fichier";
        exit ;
	}
    while($ligne=fgets($monfichier) )
    {
        echo $ligne;
    }
    echo "     |     ";
    $sum = 0;
    $j = 0;
    $mipc = 0;
    $gegm = 0;
    $bcg = 0;
    while($ligne=fgets($monfichier))
    {
        $str = explode("/", $ligne);
        $i = 0;
        while($i < sizeof($str))
        {
            echo $str[$i] . "     |     ";
            $i++;
        }
        echo "<br>";
        $sum += $str[3];
        $j++;
        if(strcmp("mipc",$str[1]) == 0)
            $mipc++;
        else if(strcmp("bcg",$str[1]) == 0)
            $bcg++;
        else if(strcmp("gegm",$str[1]) == 0)
            $gegm++;
    }
    echo "\n\tla mpyenne est : ". $sum / $j . "<br>";
    echo "l'effectife de chaque filiere : <br>";
    echo "mipc : " . $mipc. "<br>";
    echo "bcg  : " . $bcg . "<br>";
    echo "gegm : " . $gegm. "<br>";
	fclose($monfichier);
?>