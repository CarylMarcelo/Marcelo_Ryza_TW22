<?php
$certifications = [
    "Information Technology Specialist in Databases",
    "Information Technology Specialist in Java",
    "Information Technology Specialist in JavaScript",
    "Information Technology Specialist in Python"
];
?>

<section>
    <h2>Certifications</h2>
    <ul class="cert-list">
        <?php foreach($certifications as $certification): ?>
            <li><?php echo $certification; ?></li>
        <?php endforeach; ?>
    </ul>
</section>