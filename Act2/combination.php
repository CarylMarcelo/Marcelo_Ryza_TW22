<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two-Digit Combinations</title>
    <link rel="stylesheet" href="Combi.css">
</head>
<body>

<div class="numbers-container">
    <?php
    $title = "Two-Digit Combinations";
    echo "<h1 class='h1'>$title</h1>";

    for ($i = 0; $i <= 99; $i++) {
    
        echo '<span class="number-item">';
        printf("%02d", $i); 
        echo '</span>';

        if ($i < 99) {
            echo '<span class="comma">,</span> ';
        }
    }
    ?>
</div>

</body>
</html>