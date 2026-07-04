<?php
require("db.php");
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: HomeB.php");
    exit();
} 

$error = "";
$success_message = "";

// Form processing
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

      // Password validation

    if ($password !== $confirm_password) {

        $error = "Password and confirm password are not the same.";

    } else {

        // Save to database

        $sql = "INSERT INTO tblusers (first_name, middle_name, last_name, username, password, email, birthday, contact_number)

        VALUES ('$first_name', '$middle_name', '$last_name', '$username', '$password', '$email', '$birthday', '$contact')";

        if (mysqli_query($conn, $sql)) {

            header("Location: LoginB.php");

            exit();

        } else {

            $error = "Database Error: " . mysqli_error($conn);

        }

    }

}
     mysqli_close($conn);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="RegB.css">
</head>
<body>

    <div class="registration-container">
        <h2>My Personal Information</h2>
        
        <?php if ($error): ?>
            <div class="alert-error"><?= $error; ?></div>
        <?php endif; ?>
        
        <form action="RegistrationB.php" method="post">
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
</body>
</html>