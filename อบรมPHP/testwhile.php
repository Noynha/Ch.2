<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sum = 0;
        $i = 1;

        while ($i <= 100) {
            $sum += $i;
            $i++;
        }
        echo "sum = $sum <br>";
        echo "i = $i";
    ?>
</body>
</html>