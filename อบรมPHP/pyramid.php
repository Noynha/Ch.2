<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $row = 10;

        for ($i = 1; $i <= $row; $i++) { 
            for ($j = 1; $j <= $i ; $j++) { 
                echo "* ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>