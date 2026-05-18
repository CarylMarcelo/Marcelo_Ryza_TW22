<?php
$languages = ["Python", "Java", "JavaScript", "C++", "CSS"];
$designTools = ["Figma", "Canva", "Adobe Photoshop"];
$dataAnalysis = ["Pandas", "Data Cleaning", "Visualization"];
$competencies = ["Attention to Detail", "Teamwork & Collaboration", "Problem-Solving Ability", "Task Prioritization & Time Management", "Adaptive & Flexible", "Strong Work Ethic"];
?>

<section>
    <h2>Skills & Core Competencies</h2>
    
    <div class="skills-group">
        <h3>Languages</h3>
        <ul>
            <?php foreach($languages as $language): ?>
                <li><?php echo $language; ?></li>
            <?php endforeach; ?>
        </ul>

        <h3>Design Tools</h3>
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

        <h3>Core Competencies</h3>
        <ul>
            <?php foreach($competencies as $competency): ?>
                <li><?php echo $competency; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>