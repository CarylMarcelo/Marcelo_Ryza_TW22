<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="Volume.css">
</head>

<body>

<?php
function cubeVolume($s) {
    return $s * $s * $s;
}

function rectangularPrismVolume($l, $w, $h) {
    return $l * $w * $h;
}

function cylinderVolume($r, $h) {
    return pi() * $r * $r * $h;
}

function coneVolume($r, $h) {
    return (1 / 3) * pi() * $r * $r * $h;
}

function sphereVolume($r) {
    return (4 / 3) * pi() * $r * $r * $r;
}
?>

<table>
    <tr>
        <th colspan="3" class="title">Volume of Shapes</th>
    </tr>

    <tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
    </tr>

    <tr>
        <td>s = 5</td>
        <td>V = s<sup>3</sup></td>
        <td><?php echo cubeVolume(5); ?></td>
    </tr>

    <tr>
        <td>l = 8, w = 4, h = 3</td>
        <td>V = l × w × h</td>
        <td><?php echo rectangularPrismVolume(8, 4, 3); ?></td>
    </tr>

    <tr>
        <td>r = 3, h = 7</td>
        <td>V = πr<sup>2</sup>h</td>
        <td><?php echo round(cylinderVolume(3, 7), 2); ?></td>
    </tr>

    <tr>
        <td>r = 3, h = 9</td>
        <td>V = 1/3 πr<sup>2</sup>h</td>
        <td><?php echo round(coneVolume(3, 9), 2); ?></td>
    </tr>

    <tr>
        <td>r = 4</td>
        <td>V = 4/3 πr<sup>3</sup></td>
        <td><?php echo round(sphereVolume(4), 2); ?></td>
    </tr>
</table>

</body>
</html>