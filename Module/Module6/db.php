<!-- This codes will connect to the database -->
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "student_profile";

$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn) {
    die("Connection failed..." . mysqli_connect_error());
}
?>