<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>
<body>
    <?php
        function abcmath($n1, $n2, $n3) {
            for ($i = 1; $i <= $n2 ; $i++) { 
                $n1 += $n1;
            }
            // echo $n1;
            return $n1 % $n3 == 0;
        }

        function display($num1, $num2, $num3) {
            $result = abcmath($num1, $num2, $num3);
            if ($result) {
                echo "result ($num1, $num2, $num3) is Visble";
            } else {
                echo "result ($num1, $num2, $num3 is not Visble)";
            }
        }

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        // echo $num1, $num2, $num3;

        display($num1, $num2, $num3);
    ?>
</body>
</html>