<?php 

	echo date("Y-m-d H:i:s");
	echo "<br>";
	$auj = getdate();
	$y = $auj["year"];
	$m = $auj["mon"];
	$d = $auj["mday"];
	$h = $auj["hours"];
	$mi = $auj["minutes"];
	$s = $auj["seconds"];
	echo "$y-$m-$d $h:$mi:$s";

    echo "<br>";
    $month = 18;
    $year = 2013;
    $day = 36;

    if(checkdate($month, $day, $year))
    {
        echo "form valid";
    }
    else
        echo "form invalide";
?>