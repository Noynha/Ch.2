<html>
<head><title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณเกรด</title></head>
<body>
<form method="get" action="lab6-11cal.php">
<table border="1" align="center" width="500">
    <tr>
        <td colspan="2" align="center">
            <big>ทดสอบการใช้ Arithmatic Operator </big>
    </td>
    <tr>
    <tr>
        <td>Enter Home work : </td>
        <td><input type="number" name="hw" size="15" min="0" max="30" value=""/> </td>
    </tr>
        <td>Enter Midterm : </td>
        <td><input type="number" name="midterm" size="15" min="0" max="35" value=""/></td>
    </tr>
    </tr>
        <td>Enter final : </td>
        <td><input type="number" name="final" size="15" min="0" max="35" value=""/></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" value=" OK " />
            <input type="reset" value=" Clear " />
        </td>
    </tr>
</table>
</form>
</body>
</html>