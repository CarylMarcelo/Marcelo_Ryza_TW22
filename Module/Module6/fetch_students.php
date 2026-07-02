<?php
require("db.php");

$result = mysqli_query($conn, "SELECT * FROM tblstudents ORDER BY last_name, first_name");

// Alwasy a good practice to close your connection after using
mysqli_close($conn);
?>