<?php
require("db.php");
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: HomeB.php");
    exit();
}

$message = "";
$saved_username = isset($_COOKIE['remember_user']) ? $_COOKIE['remember_user'] : "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    // Select by username 
    $sql = "SELECT * FROM tblusers WHERE username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a user with that username actually exists
        if ($result && $result->num_rows === 1) {
            $user = $result->fetch_assoc();
            
            if ($password === $user['password']) {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $user['id']; 
                $_SESSION['username'] = $user['username'];

                // Handle "Remember Me"
                if (isset($_POST['remember'])) {

                    setcookie('remember_user', $user['username'], time() + (86400 * 30), "/");
                } else {

                    setcookie('remember_user', '', time() - 3600, "/");
                }

                $stmt->close();
                mysqli_close($conn);
                header("Location: HomeB.php");
                exit();
            } else {
                $message = "Invalid username or password.";
            }
        } else {
            $message = "Invalid username or password.";
        }
        
        $stmt->close();
    } else {
        $message = "Database error: Unable to process login.";
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Activity B</title>
    <link rel="stylesheet" href="RegB.css">
</head>
<body>

    <div class="registration-container">
        <h2>Log-In Form</h2>
        
        <?php if ($message): ?>
            <div class="alert-error"><?= $message; ?></div>
        <?php endif; ?>
        
        <form action="LoginB.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" value="<?= htmlspecialchars($saved_username); ?>" placeholder="Enter your username" required>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            
            <div class="form-group" style="display: flex; align-items: center; margin-bottom: 15px;">
                <input type="checkbox" name="remember" id="remember" style="width: auto; margin-right: 10px;" <?= $saved_username ? 'checked' : ''; ?>>
                <label for="remember" style="margin-bottom: 0;">Remember Me</label>
            </div>
            
            <button type="submit" name="submit" class="btn-submit">Login</button>
        </form>
        
        <p style="text-align: center; margin-top: 15px;">
            No account yet? <a href="RegistrationB.php" style="color: var(--primary-green);">Register here</a>
        </p>
    </div>

</body>
</html>