<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity 2</title>
    <link rel="stylesheet" href="LabAct2.css">
</head>
<body>

<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; 
$sum = array_sum($numbers);
$product = array_product($numbers);
$difference = array_reduce(array_slice($numbers, 1), fn($carry, $item) => $carry - $item, $numbers[0]);
$quotient = array_reduce(array_slice($numbers, 1), fn($carry, $item) => $carry / $item, $numbers[0]);
?>
    <table>
        <tr><td colspan="2" style="background-color: #f38484">Array list: <?= implode(', ', $numbers) ?></td></tr>
        <tr><td style="width:35%;">Addition</td>
        <td style="width:65%;"><?= $sum ?></td></tr>
        <tr><td>Subtraction</td><td><?= $difference ?></td></tr>
        <tr><td>Multiplication</td><td><?= $product ?></td></tr>
        <tr><td>Division</td><td><?= sprintf("%E", $quotient) ?></td></tr>
    </table>
</body>
</html>