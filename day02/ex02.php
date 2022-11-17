<?php


	function calcule_sin($str, $angle)
	{
        if($str = "deg")
        {
            $angle= ($angle *  pi()) / 180; 
            $result = sin($angle);
            echo $result;
        }
        else if($str = "grad")
        {
            $angle = ($angle * pi() )/ 200;
            $result = sin($angle);
            echo $result;
        }
        else if($str = "rad")
        {
            $result = sin($angle);
            echo $result;
        }
	}
    calcule_sin("deg", 80);

?>
