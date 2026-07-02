<?php
require("db.php");

$message = "";
$type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch all data from the form
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $year_level = (int)mysqli_real_escape_string($conn, $_POST['year_level']);

    $sql = "INSERT INTO tblstudents (student_id, first_name, last_name, email, course, year_level) VALUES ('$student_id', '$first_name', '$last_name', '$email', '$course', $year_level)";

    if (mysqli_query($conn, $sql)) {
        $message = "Registration sucessfull...";
        $type = "success";
    } else {
        $message = "ERROR: " . mysqli_error($conn);
        $type = "danger";
    }
}

mysqli_close($conn);
