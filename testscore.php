<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculation</title>
    <link rel="stylesheet" href="styletestscore.css">
</head>
<body>
    <div class="container">
        <?php

        function calculateGrade($total) {
            if ($total >= 80) return 'A';
            elseif ($total >= 75) return 'B+';
            elseif ($total >= 70) return 'B';
            elseif ($total >= 65) return 'C+';
            elseif ($total >= 60) return 'C';
            elseif ($total >= 55) return 'D+';
            elseif ($total >= 50) return 'D';
            else return 'F';
        }

        if (isset($_POST['submit'])) {
            $filename = basename($_POST['filename']);
            if (file_exists($filename)) {
                echo "<h1>ผลลัพธ์จากการคำนวณเกรด</h1>";
                echo "<table>";
                echo "<tr>
                        <th>นักศึกษา</th>
                        <th>ทดสอบย่อย</th>
                        <th>สอบกลางภาค</th>
                        <th>สอบปลายภาค</th>
                        <th>รวม</th>
                        <th>Grade</th>
                      </tr>";

                $text = file($filename);
                foreach ($text as $line) {
                    $data = explode(",", $line);
                    $student = trim($data[0]);
                    $quiz = (int)trim($data[1]);
                    $midterm = (int)trim($data[2]);
                    $final = (int)trim($data[3]);
                    $total = $quiz + $midterm + $final;
                    $grade = calculateGrade($total);

                    echo "<tr>
                            <td>$student</td>
                            <td>$quiz</td>
                            <td>$midterm</td>
                            <td>$final</td>
                            <td>$total</td>
                            <td>$grade</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<h1>File Not Found</h1>";
                echo "<p>Please check the file name and try again.</p>";
            }
        } else {
        ?>
        <h1>Calculation Grade</h1>
        <form method="post" action="testscore.php">
            <table>
                <tr>
                    <td>File name</td>
                    <td><input type="text" name="filename" size="40" required /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="SUBMIT" class="btn" />
                        <input type="reset" name="reset" value="RESET" class="btn" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
    </div>
</body>
</html>
