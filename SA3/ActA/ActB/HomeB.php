<?php
require("db.php");
require("mailer.php"); 
session_start();

// 1. Security Check
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: LoginB.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$message = "";

// 2. Fetch user data
$stmt = $conn->prepare("SELECT * FROM tblusers WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    session_destroy();
    header("Location: LoginB.php");
    exit();
}

$user = $result->fetch_assoc();

// Handle Reset Password
if (isset($_POST['reset_submit'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($current_password !== $user['password']) {
        $message = "Current password is incorrect.";
    } elseif ($new_password !== $confirm_password) {
        $message = "New passwords do not match.";
    } else {
        
        $update_stmt = $conn->prepare("UPDATE tblusers SET password = ? WHERE id = ?");
        $update_stmt->bind_param("si", $new_password, $user_id);
        
        if ($update_stmt->execute()) {
            $subject = "Security Notification: Password Updated";
            $body = get_password_reset_template($user['first_name'], "http://yourdomain.com/login.php");
            
            if (send_confirmation_email($user['email'], $user['first_name'], $subject, $body)) {
                $message = "Password successfully reset! Confirmation email sent.";
            } else {
                $message = "Password updated, but email could not be sent.";
            }
        } else {
            $message = "Database error: " . $conn->error;
        }
        $update_stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="RegB.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="registration-container">
        
        <div class="header-container">
            <p class="welcome-text">
                Welcome, <?= htmlspecialchars(($user['first_name'] ?? '') . ' ' . ($user['last_name'] ?? '')); ?>!
            </p>
            <a href="LogoutB.php" class="logout-link">Log-out</a>
        </div>
        <div class="profile-card">
            <p><strong>Birthday:</strong> <?= htmlspecialchars($user['birthday'] ?? 'N/A'); ?></p>
            <p><b> Contact Details: </b></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($user['email'] ?? 'N/A'); ?></p>
            <p><strong>Contact:</strong> <?= htmlspecialchars($user['contact_number'] ?? 'N/A'); ?></p>
        </div>

        <hr>

        <?php if (!empty($message)): ?>
            <div class="alert-error"><?= htmlspecialchars($message); ?></div>
        <?php endif; ?>

        <form method="post" class="reset-form">
            <h3>RESET PASSWORD</h3>
            
            <div class="form-group">
                <input type="password" name="current_password" placeholder="Enter Current Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="new_password" placeholder="Enter New Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" placeholder="Re-Enter New Password" required>
            </div>
            
            <button type="submit" name="reset_submit" class="btn-reset-green">Reset Password</button>
        </form>
    </div>
</body>
</html>