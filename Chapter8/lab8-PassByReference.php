<?php
    //pass by reference(&)
    function Divide($n1, $n2, &$result) {
        $result = $n1 / $n2;
    }

    $num1 = 10;
    $num2 = 20;
    Divide($num1, $num2, $resultDivide);
    echo "<br><br>Result Divide : ".$resultDivide;
?>