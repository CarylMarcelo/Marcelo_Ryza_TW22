<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="Form.css">
</head>
<body>
    <?php
    // Personal Information
    $First_Name = "Ryza Caryl";
    $Middle_Name = "Flores";
    $Last_Name = "Marcelo";
    $Student_ID = "202410495";
    $Student_Email = "rfmarcelo@fit.edu.ph";
    
    $Birthday = "June 07, 2005";
    $Age = "21"; 
    $Contact_Number = "09281542196";
    $Gender = "Female";

    $Home_Address = "Pinagbuhatan, Pasig City";

    // Educational Background
    $school1 = "Rizal High School";
    $degree1 = "Senior High School (STEM)";
    $year1 = "2022 - 2024";

    $school2 = "FEU Institute of Technology";
    $degree2 = "BS in Information Technology (WMA)";
    $year2 = "2024 - Present"; 
    ?>

    <div class="form-container">
        <h1>Student Registration Form</h1>

        <div class="section-header">For School Use</div>
        <div class="row">
            <div class="field">
                <label>Student Number:</label>
                <input type="text" value="<?php echo $Student_ID; ?>" readonly>
            </div>
            <div class="field">
                <label>Email Address:</label>
                <input type="text" value="<?php echo $Student_Email; ?>" readonly>
            </div>
        </div>

        <div class="section-header">Student Information</div>
        <div class="row">
            <div class="field">
                <label>Last Name</label>
                <input type="text" value="<?php echo $Last_Name; ?>">
            </div>
            <div class="field">
                <label>First Name</label>
                <input type="text" value="<?php echo $First_Name; ?>">
            </div>
            <div class="field">
                <label>Middle Name</label>
                <input type="text" value="<?php echo $Middle_Name; ?>">
            </div>
        </div>

        <div class="row">
            <div class="field">
                <label>Gender</label>
                <div class="checkbox-group">
                    <input type="checkbox" <?php echo ($Gender == "Male") ? "checked" : ""; ?>> Male
                    <input type="checkbox" <?php echo ($Gender == "Female") ? "checked" : ""; ?>> Female
                </div>
            </div>
            <div class="field">
                <label>Date of Birth</label>
                <input type="text" value="<?php echo $Birthday; ?>">
            </div>
            <div class="field">
                <label>Age</label>
                <input type="text" value="<?php echo $Age; ?>">
            </div>
        </div>

        <div class="section-header">Previous School Information</div>
        <div class="row">
            <div class="field">
                <label>Name of Previous School</label>
                <input type="text" value="<?php echo $school1; ?>">
            </div>
            <div class="field">
                <label>Degree/Track</label>
                <input type="text" value="<?php echo $degree1; ?>">
            </div>
            <div class="field">
                <label>Years Attended</label>
                <input type="text" value="<?php echo $year1; ?>">
            </div>
        </div>

        <div class="section-header">Current School</div>
        <div class="row">
            <div class="field">
                <label>Institution</label>
                <input type="text" value="<?php echo $school2; ?>">
            </div>
            <div class="field">
                <label>Specialization</label>
                <input type="text" value="<?php echo $degree2; ?>">
            </div>
        </div>
    </div>
</body>
</html>