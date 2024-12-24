<!-- ไม่รองรับ คอมห้องWEB -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงการฟังก์ชั่น fopen และ fgetss</title>
</head>
<body>

<?php

// open file
$fp = @fopen("sample.txt" , "r");
$first = true;

if ($fp) {
    while ( !feof($fp) ) {
        $data = @feof( $fp);
        echo $data . "<br>";
    }
} else {
    die ("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ ! </body></html>");
}

?>

</body>
</html>