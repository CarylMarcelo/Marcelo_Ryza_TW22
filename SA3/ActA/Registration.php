<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: Home.php");
    exit();
}

$error = "";
$success_data = null;

if (isset($_POST['submit'])) {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $error = "Password and confirm password are not the same.";
    } else {
        $success_data = $_POST;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="Reg.css">
</head>
<body>

    <div class="registration-container">
        <h2>My Personal Information</h2>
        
        <?php if ($error): ?>
            <div class="alert-error"><?= $error; ?></div>
        <?php endif; ?>
        
        <form action="Registration.php" method="post">
            <div class="form-group">
    <label>First Name</label>
    <input type="text" name="first_name" placeholder="Enter first name" required>
</div>
<div class="form-group">
    <label>Middle Name</label>
    <input type="text" name="middle_name" placeholder="Enter middle name">
</div>
<div class="form-group">
    <label>Last Name</label>
    <input type="text" name="last_name" placeholder="Enter last name" required>
</div>
<div class="form-group">
    <label>Username</label>
    <input type="text" name="username" placeholder="Choose a username" required>
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter at least 8 characters" required>
</div>
<div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="confirm_password" placeholder="Re-enter your password" required>
</div>
<div class="form-group">
    <label>Birthday</label>
    <input type="date" name="birthday" required>
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" name="email" placeholder="name@gmail.com" required>
</div>
<div class="form-group">
    <label>Contact Number</label>
    <input type="text" name="contact" placeholder="09XXXXXXXXX" required>
</div>
            <button type="submit" name="submit" class="btn-submit">Submit</button>
        </form>

        <?php if ($success_data): ?>
            <div class="result-box">
                <p><span class="label">Full Name:</span> <?= htmlspecialchars($success_data['first_name'] . ' ' . $success_data['middle_name'] . ' ' . $success_data['last_name']); ?></p>
                <p><span class="label">Username:</span> <?= htmlspecialchars($success_data['username']); ?></p>
                <p><span class="label">Password:</span> <?= htmlspecialchars($success_data['password']); ?></p>
                <p><span class="label">Birthday:</span> <?= htmlspecialchars($success_data['birthday']); ?></p>
                <p><span class="label">Email:</span> <?= htmlspecialchars($success_data['email']); ?></p>
                <p><span class="label">Contact Number:</span> <?= htmlspecialchars($success_data['contact']); ?></p>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>