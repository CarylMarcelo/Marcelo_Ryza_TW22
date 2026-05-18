<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Names - String Functions</title>
    <link rel="stylesheet" href="ListOfNames.css">
</head>
<body>

<?php
// 1. Create an array with 20 different names
$names = [
    "Ryza", "Caryl", "Amei", "Samantha", "Pablo",
    "Josh", "Nicole", "Jeniah", "Geraldine", "Shanae",
    "Anisha", "Gianelli", "Salve", "Katherine", "Emelda",
    "Isabella", "Dolores", "Ashley", "Ricardo", "Fourth"
];
?>

<table>
    <tr>
        <th colspan="6" class="main-header">List of names</th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Number of characters</th>
        <th>Uppercase first character</th>
        <th>Replace vowels with @</th>
        <th>Check position of character "a"</th>
        <th>Reverse name</th>
    </tr>

    <?php
    // Loop through each name and apply the string functions
    foreach ($names as $name) {
        
        // 1. Number of characters (including spaces)
        $char_count = strlen($name);
        
        // 2. Change the first character into uppercase
        $uppercase_first = ucfirst($name);
        
        // 3. Replace all vowels (case-insensitive) with @ symbol
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $replaced_vowels = str_replace($vowels, '@', $name);
        
        // 4. Check the position of letter 'a' (1-MyResumeed based on the sample image)
        $pos_a = strpos(strtolower($name), 'a');
        if ($pos_a !== false) {
            $position_output = $pos_a + 1; 
        } else {
            $position_output = "None";
        }
        
        // 5. Change the name into reverse format
        $reversed_name = strrev($name);
        
        // Output the row data dynamically
        echo "<tr>";
        echo "<td>" . ($name) . "</td>";
        echo "<td>" . $char_count . "</td>";
        echo "<td>" . ($uppercase_first) . "</td>";
        echo "<td>" . ($replaced_vowels) . "</td>";
        echo "<td>" . $position_output . "</td>";
        echo "<td>" . ($reversed_name) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>