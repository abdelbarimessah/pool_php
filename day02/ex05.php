<?php
    function calculator()
    {

        $nb1 = $_POST["nb1"];
        $nb2 = $_POST["nb2"];
        $op = $_POST["operation"];

        switch ($op)
        {
            case '+':
                $result = $nb1 + $nb2;
                echo $result;
                break;
            case '-':
                $result = $nb1 - $nb2;
                echo $result;
                break;
            case '*':
                $result = $nb1 * $nb2;
                echo $result;
                break;
            case '/':
                if($nb2 == 0)
                {
                    echo "the second number must be defernt to 0 in this operation !";
                    break;
                }
                $result = $nb1 / $nb2;
                echo $result;
                break;
        }
    }
    calculator();
?>