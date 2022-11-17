<!-- Q1 -->
<?php
	function mutiple($nb)
	{
		if($nb % 3 == 0 && $nb % 5 == 0)
			echo "$nb est multiple de 3 et 5";
		else
			echo "$nb n'est pas un multiple de 3 et 5";
	}
	mutiple(15);
	echo "<br>";
	mutiple(10);
?>
<!-- Q2 -->
<?php
	function pair_impair($nb)
	{
		if($nb % 2 == 0)
			echo "$nb est pair";
		else
			echo "$nb est impair";
	}
	pair_impair(15);
	echo "<br>";
	pair_impair(10);
?>
<!-- Q3 -->
<?php
function pgcd($a, $b) {
		if ($a == $b)
			return ($a);
		if($a < 0 || $b < 0)
			return (0);
		else if ($a > $b) {
				$x = $b;
			while ($x > 0) {
				if ($b % $x == 0 && $a % $x ==0)
					return ($x);
				$x--;
			}
			return (0);
		} else if ($b > $a) {
				$x = $a;
			while ($x > 0) {
				if ($a % $x == 0 && $b % $x == 0)
					return ($x);
				$x--;
			}
			return (0);
		}
		return (0);
	}
?>
<!-- q4 -->
<?php
	function check($age,$sexe)
	{
		if($age >= 21 && $age <= 40 && (strcmp($sexe, "feminin") == 0))
			echo "bienvenue mademoiselle";
	}
	check(39, "feminin");
?>
