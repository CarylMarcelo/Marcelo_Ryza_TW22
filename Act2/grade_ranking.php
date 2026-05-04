<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Ranking Program</title>
    <link rel="stylesheet" href="GR.css">
</head>
<body>
<?php

$studentName = "Ryza Caryl F. Marcelo";
$grade = 95; 
$rank = "";

// determining the ranking using the if...else statement
if ($grade >= 93) {
    $rank = "A";
} elseif ($grade >= 90) {
    $rank = "A-";
} elseif ($grade >= 87) {
    $rank = "B+";
} elseif ($grade >= 83) {
    $rank = "B";
} elseif ($grade >= 80) {
    $rank = "B-";
} elseif ($grade >= 77) {
    $rank = "C+";
} elseif ($grade >= 73) {
    $rank = "C";
} elseif ($grade >= 70) {
    $rank = "C-";
} elseif ($grade >= 67) {
    $rank = "D+";
} elseif ($grade >= 63) {
    $rank = "D";
} elseif ($grade >= 60) {
    $rank = "D-";
} else {
    $rank = "F";
}
?>
<div class="card-container">
    <div class="name-box">
        Name: <?php echo $studentName; ?>
    </div>

    <div class="content-row">
        <div class="info-box">
            <span>Rank:</span>
            <strong><?php echo $rank; ?></strong>
        </div>

        <div class="info-box">
            <span>Grade:</span>
            <strong><?php echo $grade; ?></strong>
        </div>

        <div class="picture-box">
            <img src="Profile.jpg" alt="Profile Picture" class="profile-img">
        </div>
    </div>
</div>

</body>
</html>