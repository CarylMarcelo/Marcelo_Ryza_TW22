<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Palette Results</title>
    <link rel="stylesheet" type="text/css" href="Color.css">
</head>
<body>

    <div class="card-holder">
        <h2 class="card-title">Your Saved Palette</h2>

        <div class="results-container">
            <?php
            if (isset($_SESSION['fav1']) && !empty(array_filter([$_SESSION['fav1'], $_SESSION['fav2'], $_SESSION['fav3'], $_SESSION['fav4'], $_SESSION['fav5']])) ) {
                
                $colors = [
                    "Color 1" => $_SESSION['fav1'],
                    "Color 2" => $_SESSION['fav2'],
                    "Color 3" => $_SESSION['fav3'],
                    "Color 4" => $_SESSION['fav4'],
                    "Color 5" => $_SESSION['fav5'],
                ];

                foreach ($colors as $label => $value) {
                    $cleanValue = htmlspecialchars(trim($value));
                    
                    $displayValue = !empty($cleanValue) ? $cleanValue : '#cbd5e1';
                    $displayText = !empty($cleanValue) ? $cleanValue : 'Not Set';
                    
                    echo "<div class='color-item'>";
                    echo "  <span class='color-label'>" . $label . "</span>";
                    
                    echo "  <div class='preview-badge'>";
                    echo "      <span class='color-swatch' style='background-color: " . $displayValue . ";'></span>";
                    echo "      <span class='color-code' style='color: " . $displayValue . ";'>" . $displayText . "</span>";
                    echo "  </div>";
                    echo "</div>";
                }
            } else {
                echo "<div class='empty-state'>";
                echo "  <p>No active colors found. Start by creating a configuration below.</p>";
                echo "</div>";
            }
            ?>
        </div>
        
        <div class="actions-wrapper">
            <a href="FavoriteColor.php" class="back-btn">&larr; Modify Custom Colors</a>
        </div>
    </div>

</body>
</html>