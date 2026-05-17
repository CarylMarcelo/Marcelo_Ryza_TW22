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
        function add($num1, $num2) {
            return $num1 + $num2;
        }
        ?>

        <p>Sum of 2 numbers: <?= add(45, 67); ?></p>
    </div>
    <div>
        <p>Using local and globa lvariables</p>
        <?php
        $num = 2;
        function double() {
            global $num;
            $num = $num * 2;
        }

        double();
        ?>
        <p><?= $num; ?></p>
        <?php double(); ?>
        <p><?= $num; ?></p>
        <?php double(); ?>
        <p><?= $num; ?></p>
    </div>
</body>
</html>