<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> โปรแกรมคำนวณเกรด </title>
</head>
    <body>
<?php
$hw = $_GET['hw'];
$midterm = $_GET['midterm'];
$final = $_GET['final'];
if ($hw > 30) $hw = 30;
if ($midterm > 35) $midterm = 35;
if ($final > 35) $final = 35;

echo "<p>";
echo "<b>ข้อมูลคะแนน </b><br />";
echo "Homework : <i> $hw </i> <br/>";
echo "Midterm : <i> $midterm </i> <br/>";
echo "Final : <i> $final </i> <br/>";
$total = $hw + $midterm + $final;

echo "Total Score : $total <br>";
if ($total >= 80) echo "<img src=img/A.jpg> <br>";
elseif ($total >= 70) echo "<img src=img/B.jpg> <br>";
elseif ($total >= 60) echo "<img src=img/C.jpg> <br>";
elseif ($total >= 50) echo "<img src=img/D.jpg> <br>";
else echo "<img src=img/F.jpg> 
<br>";
?>

    </body>
</html>