<?php
$name = "Ryza Caryl F. Marcelo";
$title = "Web Developer";
$email = "rfmarcelo@fit.edu.ph";
$phone = "+63 928 154 2196";
$location = "Pasig City, Philippines";
?>

<div class="personal-info-section">
    <div class="profile-picture-container">
        <img src="ProfilePic.jpg" alt="<?php echo $name; ?>" class="profile-picture">
    </div>
    <header>
        <h1><?php echo $name; ?></h1>
        <p class="subtitle"><?php echo $title; ?></p>
        <div class="contact-info">
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Phone:</strong> <?php echo $phone; ?></p>
            <p><strong>Location:</strong> <?php echo $location; ?></p>
        </div>
    </header>
</div>