<?php

/**
 * @var mysqli $conn Database connection
 */

require("db.php");

$message = "";
$type = "";

if (isset($_GET['token']) && !empty($_GET['token'])) {
    $token = mysqli_real_escape_string($conn, $_GET['token']);

    $result = mysqli_query($conn, "SELECT * FROM tblstudents WHERE confirm_token = '$token'");

    if (mysqli_num_rows($result) == 1) {
        $student = mysqli_fetch_assoc(($result));

        if ($student['is_confirmed'] == 1) {
            $message = "Your account has already been confirmed.";
            $type = "info";
        } else {
            mysqli_query($conn, "UPDATE tblstudents SET is_confirmed = 1, confirm_token = NULL WHERE confirm_token = '$token'");
            $message = "You account is successfully confirmed.";
            $type = "success";
        }
    } else {
        $message = "Error!";
        $type = "danger";
    }
} else {
    $message = "No token provided.";
    $type = "danger";
}

mysqli_close($conn);

?>

<?php
require('include/header.php');
?>
<div class="col col-md-4 p5">
    <div class="card card-shadow-smm">
        <div class="card-body">
            <h4 class="mb-3">Account Confirmation</h4>
            <div class="aler alert-<?= $type ?>"><?= $message ?></div>
            <a href="index.php" class="btn btn-secondary">View Student List</a>
        </div>

    </div>
</div>
<?php
require('include/footer.php');
?>