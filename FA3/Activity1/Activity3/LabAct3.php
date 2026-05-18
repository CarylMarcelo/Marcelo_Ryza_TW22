<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity 3</title>
    <link rel="stylesheet" href="LabAct3.css">
</head>
<body>

<?php
function do_math($Num1, $Num2, $Num3) {
    return [
        "vals" => "$Num1, $Num2, $Num3",
        "Add"  => $Num1 + $Num2 + $Num3,
        "Sub"  => $Num1 - $Num2 - $Num3,
        "Mult" => $Num1 * $Num2 * $Num3,
        "Div"  => $Num2 && $Num3 ? $Num1 / $Num2 / $Num3 : "Error"
    ];
}
$res = do_math(25, 13, 6); 
?>

    <table>
        <tr><td colspan="2">My Parameter values: <?= $res['vals'] ?></td></tr>
        <tr><td style="width:35%;">Addition</td><td style="width:65%;"><?= $res['Add'] ?></td></tr>
        <tr><td>Subtraction</td><td><?= $res['Sub'] ?></td></tr>
        <tr><td>Multiplication</td><td><?= $res['Mult'] ?></td></tr>
        <tr><td>Division</td><td><?= $res['Div'] ?></td></tr>
    </table>
</body>
</html>