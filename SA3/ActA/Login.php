<?php
session_start();
// Prevent access if already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: Home.php");
    exit();
}

$error = "";
// Static variables
$static_user = "user123";
$static_pass = "password123";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $static_user && $password === $static_pass) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;

        // Remember me logic
        if (isset($_POST['remember'])) {
            setcookie("user_cookie", $username, time() + 3600); 
            setcookie("pass_cookie", $password, time() + 3600);
        }

        header("Location: Home.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="Reg.css">
</head>
<body>

    <div class="registration-container">
        <h2>Log-In Form</h2>
        
        <?php if ($error): ?>
            <div class="alert-error"><?= $error; ?></div>
        <?php endif; ?>
        
        <form action="Login.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" value="<?= isset($_COOKIE['user_cookie']) ? $_COOKIE['user_cookie'] : ''; ?>" required>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?= isset($_COOKIE['pass_cookie']) ? $_COOKIE['pass_cookie'] : ''; ?>" required>
            </div>
            
            <div class="form-group" style="display: flex; align-items: center; gap: 8px; margin-top: 15px;">
                <input type="checkbox" name="remember" id="remember" style="width: auto;">
                <label for="remember" style="margin-bottom: 0;">Remember Me</label>
            </div>
            
            <button type="submit" name="submit" class="btn-submit">Login</button>
        </form>
    </div>

</body>
</html>