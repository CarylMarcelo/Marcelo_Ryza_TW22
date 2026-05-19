<?php
$school1 = "Rizal High School";
$degree1 = "Senior High School (STEM)";
$year1 = "2022 - 2024";

$school2 = "FEU Institute of Technology";
$degree2 = "BS in Information Technology (WMA)";
$year2 = "2024 - Present";
?>

<section>
    <h2>Educational Background</h2>
    <div class="education-item">
        <h3><?php echo $school2; ?></h3>
        <p><?php echo $degree2; ?> | <?php echo $year2; ?></p>
    </div>
    <hr>
    <div class="education-item">
        <h3><?php echo $school1; ?></h3>
        <p><?php echo $degree1; ?> | <?php echo $year1; ?></p>
    </div>
</section>