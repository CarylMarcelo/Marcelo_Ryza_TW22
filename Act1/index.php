<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Personal Information
    $name = "Ryza Caryl F. Marcelo";
    $title = "BSIT - Web and Mobile Application Student";
    $email = "rfmarcelo@fit.edu.ph";
    $phone = "+63 928 154 2196";
    $location = "Pasig City, Philippines";

    // Profile Summary
    $summary = "Detail-oriented IT student specializing in Web and Mobile Application development. Passionate about learning and creating seamless user experiences and contributing to innovative projects. Eager to apply my skills in a dynamic work environment and grow as a professional in the tech industry.";

    // Technical Skills
    $languages = ["Python (Tkinter)", "Java", "JavaScript", "C++", "CSS"];
    $designTools = ["Figma", "Canva", "Adobe Photoshop"];
    $dataAnalysis = ["Python (Pandas)", "Data Cleaning", "Visualization"];

    // Education
    $school1 = "Rizal High School";
    $degree1 = "Senior High School (STEM)";
    $year1 = "2022 - 2024";

    $school2 = "FEU Institute of Technology";
    $degree2 = "BS in Information Technology (WMA)";
    $year2 = "2024 - Present";

    // Certifications
    $certifications = [
        "Information Technology Specialist in Databases",
        "Information Technology Specialist in Java",
        "Information Technology Specialist in JavaScript",
        "Information Technology Specialist in Python"
    ];

    // Core Competencies
    $competencies = [
        "Attention to Detail",
        "Teamwork & Collaboration",
        "Problem-Solving Ability",
        "Task Prioritization & Time Management",
        "Adaptive & Flexible",
        "Strong Work Ethic"
    ];

    //Projects
            $Project1 = "Lead UI Designer | CitySync (Mobile App Prototype)";
            $Project2 = "Project Manager & Developer | PharmaSync (Pharmaceutical Dashboard)";
            $Project3 = "Data Analyst | Youth Apathy Regional Analysis";
    ?>


<div class="resume-container">

    <div class="left-column">
        <div class="profile-picture-container">
        <img src="1×1 Photo.jpg" alt="Ryza Caryl F. Marcelo" class="profile-picture">
    </div>

        <h2>Technical Skills</h2>
        <div class="skills-group">
            <h3>Languages</h3>
            <ul>
                <?php foreach($languages as $language): ?>
                    <li><?php echo $language; ?></li>
                <?php endforeach; ?>
            </ul>

            <h3>Design & Tools</h3>
            <ul>
                <?php foreach($designTools as $tool): ?>
                    <li><?php echo $tool; ?></li>
                <?php endforeach; ?>
            </ul>

            <h3>Data Analysis</h3>
            <ul>
                <?php foreach($dataAnalysis as $data): ?>
                    <li><?php echo $data; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <h2>Core Competencies</h2>
        <ul>
            <?php foreach($competencies as $competency): ?>
                <li><?php echo $competency; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Certifications</h2>
        <ul>
            <?php foreach($certifications as $certification): ?>
                <li><?php echo $certification; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="right-column">

        <header>
            <h1><?php echo $name; ?></h1>
            <p class="subtitle"><?php echo $title; ?></p>
            <div class="contact-info">
                <?php echo $email; ?> | <?php echo $phone; ?> | <?php echo $location; ?>
            </div>
        </header>

        <section>
            <h2>Profile Summary</h2>
            <p><?php echo $summary; ?></p>
        </section>

        <section>
            <h2>Projects</h2>
            <div class="project-item">
                <h3><?php echo $Project1; ?></h3>
                <p>- Lead the UI/UX design for a community engagement mobile application.</p>
                <p>- Managed team workflows and developed high-fidelity prototypes to ensure a user-centric interface.</p>
            </div>

            <div class="project-item">
                <h3><?php echo $Project2; ?></h3>
                <p>- Developed a pharmaceutical dashboard interface using Python and the Tkinter module.</p>
                <p>- Designed the color palette and layout to optimize navigation and data accessibility.</p>
            </div>

            <div class="project-item">
                <h3><?php echo $Project3; ?></h3>
                <p>- Conducted a comprehensive case study on voter turnout trends using Python and Pandas.</p>
                <p>- Performed data cleaning and generated visualizations to translate complex datasets into actionable insights.</p>
            </div>
        </section>

        <section>
            <h2>Education</h2>
            <div class="education-item">
                <h3><?php echo $school2; ?></h3>
                <p><?php echo $degree2; ?> | <?php echo $year2; ?></p>
            </div>
            <div class="education-item">
                <h3><?php echo $school1; ?></h3>
                <p><?php echo $degree1; ?> | <?php echo $year1; ?></p>
            </div>
        </section>

    </div>

</div>

</body>
</html>