<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        do {
            $ranNumber = rand(1, 10);
            echo "สุ่มได้เลข : $ranNumber <br>";
        } while ($ranNumber != 5);
    ?>
</body>
</html>