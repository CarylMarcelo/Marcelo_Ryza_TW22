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
        <p><?= $cars['B']; ?></p>
        <p>Original values:</p>
        <ul>
            <?php
            foreach($cars as $key => $car):
            ?>
            <li><?= $key; ?>: <?= $car; ?></li>
            <?php endforeach; ?>
        </ul>

        <p>Sorted array using sort():</p>
        <ul>
            <?php
            sort($cars);
            foreach($cars as $key => $car):
            ?>
            <li><?= $key; ?>: <?= $car; ?></li>
            <?php endforeach; ?>
        </ul>

        <p>Sorted array using rsort():</p>
        <ul>
            <?php
            rsort($cars);
            foreach($cars as $key => $car):
            ?>
            <li><?= $key; ?>: <?= $car; ?></li>
            <?php endforeach; ?>
        </ul>

        <p>Sorted array using asort():</p>
        <ul>
            <?php
            asort($cars);
            foreach($cars as $key => $car):
            ?>
            <li><?= $key; ?>: <?= $car; ?></li>
            <?php endforeach; ?>
        </ul>

        <p>Sorted array using arsort():</p>
        <ul>
            <?php
            arsort($cars);
            foreach($cars as $key => $car):
            ?>
            <li><?= $key; ?>: <?= $car; ?></li>
            <?php endforeach; ?>
        </ul>

        <p>Sorted array using krsort():</p>
        <ul>
            <?php
            krsort($cars);
            foreach($cars as $key => $car):
            ?>
            <li><?= $key; ?>: <?= $car; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>