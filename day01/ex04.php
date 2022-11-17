<?php
    function cumul ($prix)
    {
        static $cumul=0;
        static $i=0;
        echo "total des achats $i= ";
        $cumul +=$prix;
        $i++;
        return $cumul;
    }
    echo cumul (175), "<br>";
    echo cumul (65), "<br>";
    echo cumul (69), "<br>";
?>

<!-- Q2? -->
<?php
    function surface($rayon)
    {
        $sur = pi() * $rayon *$rayon;
        echo "SURFACE DU CERCLE EST $sur";
    }
    surface(3);
?>