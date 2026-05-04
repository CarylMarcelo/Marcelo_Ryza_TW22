<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Length Converter</title>
    <link rel="stylesheet" href="CP.css">
</head>
<body>
<?php

// Define the conversion data and formulas using PHP Operators
$data = [
    "Metric Conversions" => [
        ["1 centimetre", 1 * 10, "millimetres", "1 cm", "10 mm"],
        ["1 decimetre", 1 * 10, "centimetres", "1 dm", "10 cm"],
        ["1 metre", 1 * 100, "centimetres", "1 m", "100 cm"],
        ["1 kilometre", 1 * 1000, "metres", "1 km", "1000 m"],
    ],
    "Imperial Conversions" => [
        ["1 foot", 1 * 12, "inches", "1 ft", "12 in"],
        ["1 yard", 1 * 3, "feet", "1 yd", "3 ft"],
        ["1 mile", 1 * 1760, "yards", "1 mi", "1760 yd"],
    ],
    "Metric -> Imperial Conversions" => [
        ["1 millimetre", 1 * 0.03937, "inches", "1 mm", "0.03937 in"],
        ["1 metre", 1 * 39.37008, "inches", "1 m", "39.37008 in"],
        ["1 kilometre", 1 * 0.62137, "miles", "1 km", "0.62137 mi"],
    ],
    "Imperial -> Metric Conversions" => [
        ["1 inch", 1 * 2.54, "centimetres", "1 in", "2.54 cm"],
        ["1 foot", 1 * 30.48, "centimetres", "1 ft", "30.48 cm"],
        ["1 mile", 1 * 1.60934, "kilometres", "1 mi", "1.60934 km"],
    ]
];
?>
<div class="conversion-container">
    <h1>Measure Conversion Chart – Lengths (UK)</h1>

    <?php foreach ($data as $category => $rows): ?>
        <table>
            <thead>
                <tr>
                    <th colspan="6"><?php echo $category; ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td class="label-cell"><?php echo $row[0]; ?></td>
                        <td class="equals-cell">=</td>
                        <td class="value-cell"><?php echo $row[1] . " " . $row[2]; ?></td>
                        
                        <td class="label-cell"><?php echo $row[3]; ?></td>
                        <td class="equals-cell">=</td>
                        <td class="value-cell"><?php echo $row[4]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
</div>

</body>
</html>