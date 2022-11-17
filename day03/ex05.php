<?php

	$nom = $_POST["nom"];
	$age = $_POST["age"];
	$address = $_POST["mail"];
	$prix = $_POST["prix"];

	$monfichier = fopen("resultats.txt","a+");
	if (!($monfichier)) {
		echo "Impossible d'ouvrir le fichier";
		exit ;
	}
	$str = $nom . " | " . $age . " | " . $address . " | " . $prix. "<br>";
	fwrite($monfichier, $str);
	echo $str;
	fclose($monfichier);
?>