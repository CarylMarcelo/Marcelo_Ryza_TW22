<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Multiplication Table</title>
    <link rel="stylesheet" href="Table.css">
</head>
<body>
<h2> Multiplication Table </h2>
    <table>
        <?php
        // Outer loop for rows (0 to 10)
        for ($row = 0; $row <= 10; $row++) {
            echo "<tr>";
            
            // Inner loop for columns (0 to 10)
            for ($col = 0; $col <= 10; $col++) {
                $result = $row * $col;
                

            //Color
                $colorClass = (($row + $col) % 2 == 0) ? "cream" : "pink";
                
                echo "<td class='$colorClass'>$result</td>";
            }
            
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>