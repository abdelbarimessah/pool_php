<?php 

    $str = "mon non est karim";

    $reg1 = "/karim/";
    $reg2 = "/^(karim)/";
    $reg3 = "/(karim)$/";

    $str1 = "karim";
    $str2 = "nawal";

    if(preg_match($reg1,$str))
        echo "la chaine --$str-- contient le nom karim <br>";
    else
        echo "la chaine --$str-- ne contient pas le nom karim <br>";

    if(preg_match($reg2,$str))
        echo "la chaine --$str-- commance par le nom karim <br>";
    else
        echo "la chaine --$str-- ne commance  pas par le nom karim <br>";
    
    if(preg_match($reg3,$str))
        echo "la chaine --$str-- se termine  par le nom karim <br>";
    else
        echo "la chaine --$str-- ne termine  pas par le nom karim <br>";
    echo(mb_ereg_replace($str1, $str2, $str));
?>