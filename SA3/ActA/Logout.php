<?php
session_start();
session_unset();
session_destroy(); // [cite: 36, 48]
header("Location: Login.php");
exit();
?>