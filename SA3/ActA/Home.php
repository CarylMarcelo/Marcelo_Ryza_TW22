<?php
session_start();
// Redirect to login if no active session
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: Login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Activity A</title>
    <link rel="stylesheet" href="Reg.css">
</head>
<body>

    <div class="registration-container" style="text-align: center;">
        <h2>Welcome to the System</h2>
        
        <div class="result-box" style="margin-bottom: 25px;">
            <p style="font-size: 1.2em; color: var(--primary-green); font-weight: bold;">
                Hello, <?= htmlspecialchars($_SESSION['username']); ?>!
            </p>
            <p>You have successfully logged into your account via active session.</p>
        </div>
        
        <a href="Logout.php" style="text-decoration: none;">
            <button type="button" class="btn-submit" style="background-color: #d32f2f;">Log Out</button>
        </a>
    </div>

</body>
</html>