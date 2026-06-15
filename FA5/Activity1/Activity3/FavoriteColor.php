<?php
session_start();
$show_success = false;
if (isset($_POST['send'])) {
    $_SESSION['fav1'] = trim($_POST['color1']);
    $_SESSION['fav2'] = trim($_POST['color2']);
    $_SESSION['fav3'] = trim($_POST['color3']);
    $_SESSION['fav4'] = trim($_POST['color4']);
    $_SESSION['fav5'] = trim($_POST['color5']);
    
    $show_success = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Color Input</title>
    <link rel="stylesheet" type="text/css" href="Color.css">
</head>
<body>

    <div class="card-holder">
        <h2 class="card-title">Enter Your Colors</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="palette-form">
            
            <div class="form-group">
                <label for="color1">Color 1</label>
                <input 
                    type="text" 
                    id="color1" 
                    name="color1" 
                    value="<?php echo isset($_POST['send']) && isset($_SESSION['fav1']) ? htmlspecialchars($_SESSION['fav1']) : ''; ?>" 
                    required
                >
            </div>

            <div class="form-group">
                <label for="color2">Color 2</label>
                <input 
                    type="text" 
                    id="color2" 
                    name="color2" 
                    value="<?php echo isset($_POST['send']) && isset($_SESSION['fav2']) ? htmlspecialchars($_SESSION['fav2']) : ''; ?>" 
                    required
                >
            </div>

            <div class="form-group">
                <label for="color3">Color 3</label>
                <input 
                    type="text" 
                    id="color3" 
                    name="color3" 
                    value="<?php echo isset($_POST['send']) && isset($_SESSION['fav3']) ? htmlspecialchars($_SESSION['fav3']) : ''; ?>" 
                    required
                >
            </div>

            <div class="form-group">
                <label for="color4">Color 4</label>
                <input 
                    type="text" 
                    id="color4" 
                    name="color4" 
                    value="<?php echo isset($_POST['send']) && isset($_SESSION['fav4']) ? htmlspecialchars($_SESSION['fav4']) : ''; ?>" 
                    required
                >
            </div>

            <div class="form-group">
                <label for="color5">Color 5</label>
                <input 
                    type="text" 
                    id="color5" 
                    name="color5" 
                    value="<?php echo isset($_POST['send']) && isset($_SESSION['fav5']) ? htmlspecialchars($_SESSION['fav5']) : ''; ?>" 
                    required
                >
            </div>

            <button type="submit" name="send" class="primary-btn">Save Palette</button>
        </form>

        <?php
        if ($show_success) {
            echo "<div class='success-msg'>
                    <span> Palette updated! </span> 
                    <a href='ResultColors.php'>View Results &rarr;</a>
                  </div>";
        }
        ?>
    </div>

</body>
</html>