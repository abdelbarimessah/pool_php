
<!-- Q1 -->
<?php

	$str = "PHP 5";

	for($i = 0; $i < strlen($str);$i++)
	{
		echo "$str[$i]<br>";
	}


?> 

<!-- Q2 -->
<?php

	$chaine = "Rabat est la capitale du maroc";
	$chaine = str_replace("Rabat","casablanca", $chaine);
	echo "$chaine <br>";

	$str = explode("/ ", $chaine);
	$i = 0;
	while($i < sizeof($str))
	{
		echo $str[$i];
		$i++;
	}
?>
