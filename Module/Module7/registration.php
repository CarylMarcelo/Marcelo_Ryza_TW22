<?php
/**
 * @var object $conn Database object
 */
?>

<?php
require("db.php");
require("mailer.php");

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

    // FOR IMAGE UPLOAD: Begin....
    $photo = NULL;

    if(isset($_FILES['photo']) && $_FILES['photo']['error'] === 0){
        $allowed = array("image/jpg", "image/jpeg", "image/png", "image/gif");
        $file_type = $_FILES['photo']['type'];
        $file_size = $_FILES['photo']['size'];
        $max_size = 2 * 1024 * 1024; // 2MB

        if(!in_array($file_type, $allowed)) {
            $message = "Unsupported file. Please upload image files only.";
            $type = "danger";
        } elseif($file_size > $max_size) {
            $message = "File must not esceed 2MB in size.";
            $type = "danger";
        } else {
            $upload_dir = "uploads/";
            if(!is_dir($upload_dir)) mkdir($upload_dir, 0755, true);

            $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
            $filename = $student_id . "-" . time() . "." . $ext;
            $destination = $upload_dir . $filename;

            if(move_uploaded_file($_FILES['photo']['tmp_name'], $destination)) {
                $photo = $filename;
            } else {
                $message = "Image upload failed.";
                $type = "danger";
            }
        }
    }
    //  End of image upload feature

    // Generate random token for email

    $token = bin2hex(random_bytes(32));

    $sql = "INSERT INTO tblstudents (student_id, first_name, last_name, email, course, year_level, photo, confirm_token) VALUES ('$student_id', '$first_name', '$last_name', '$email', '$course', $year_level, '$photo', '$token')";

    if (mysqli_query($conn, $sql)) {
        try {
            send_confirmation_email($email, $first_name . " " . $last_name, $token);
            $message = "Registration sucessfull...";
            $type = "success";
        } catch (Exception $e) {
            $message = "Registration sucessfull, but confirmation email was not sent.";
            $type = "warning";
        }
    } else {
        $message = "ERROR: " . mysqli_error($conn);
        $type = "danger";
    }
}

mysqli_close($conn);
