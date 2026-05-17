<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Using Arrays and Functions</title>
</head>
<body>
    <div>
        <?php
        $cars = array(
            "A" => "Mazda",
            "B" => "Ferrari",
            "C" => "Lamborghini",
            "D" => "Aston Martin"
            );
        ?>
        <ul>
            <?php foreach($cars as $key => $car): ?>
            <li><?= $key; ?>: <?= $car; ?></li>
            <?php endforeach; ?>
        </ul>
        <p><?= $cars['B']; ?></p>
    </div>
</body>
</html>