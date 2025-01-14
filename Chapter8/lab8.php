<?php

function add($n1, $n2) {
    $result = $n1 + $n2;
    echo "<br><br><br>Result Add : ".$result;
}

function subtract($n1, $n2 = 50) {
    $result = $n1 - $n2;
    echo "<br><br><br>Result Subtract : ".$result;
}

//pass by value
function Multiply ($n1, $n2) {
    $result = $n1 * $n2;
    return $result;
}

//pass by reference(&)
function Divide($n1, $n2, &$result) {
    $result = $n1 / $n2;
}


$num1 = 10;
$num2 = 20;
add($num1, $num2);

subtract($num1);
// subtract($num1,$num2);

echo "<br><br><br>การเรียกใช้ฟังก์ชั่นแบบ Pass by Value<br>";
echo "ค่าของ \$num1 \$num2 ก่อนเรียกฟังก์ชั่น Multiply มีค่า = $num1 , $num2 <br>";
$resultMultiply = Multiply($num1,$num2);
echo "<br>Result Multiply : ".$resultMultiply;
echo "<br><br>ค่าของ \$num1 \$num2 หลังเรียกฟังก์ชั่น Multiply มีค่า = $num1 , $num2 <br>";

echo "<br><br>การเรียกใช้ฟังก์ชั่นแบบ Pass by Reference<br>";
echo "ค่าของ \$num1 \$num2 ก่อนเรียกฟังก์ชั่น Divide มีค่า = $num1 , $num2 <br>";
Divide($num1, $num2, $resultDivide);
echo "<br>Result Divide : ".$resultDivide;
echo "<br><br>ค่าของ \$num1 \$num2 หลังเรียกฟังก์ชั่น Divide มีค่า = $num1 , $num2 <br>";

?>