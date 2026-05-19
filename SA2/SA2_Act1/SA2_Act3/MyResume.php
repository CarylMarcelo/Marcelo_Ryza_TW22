<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryza Marcelo - Web Resume</title>
    <link rel="stylesheet" href="MyResume.css">
</head>
<body>

<div class="resume-container">
    <nav class="resume-nav">
        <div class="logo">My Resume</div>
        <ul>
            <li><a href="MyResume.php?page=personal">Personal Info</a></li>
            <li><a href="MyResume.php?page=objective">Career Objective</a></li>
            <li><a href="MyResume.php?page=education">Education</a></li>
            <li><a href="MyResume.php?page=skills">Skills</a></li>
            <li><a href="MyResume.php?page=certifications">Certifications</a></li>
            <li><a href="MyResume.php?page=projects">Projects</a></li>
        </ul>
    </nav>

    <main class="resume-content">
        <?php
        $page = isset($_GET['page']) ? strtolower($_GET['page']) : 'personal';

        $file_mapping = [
            'personal'       => 'pages/Personal_Info.php',
            'objective'      => 'pages/Career_Objective.php',
            'education'      => 'pages/Education.php',
            'skills'         => 'pages/Skills.php',
            'certifications' => 'pages/Certifications.php',
            'projects'       => 'pages/Projects.php'
        ];

        if(array_key_exists($page, $file_mapping)) {
            if($page === 'personal') {
                require $file_mapping[$page];
            } else {
                include $file_mapping[$page];
            }
        } else {
            echo "<h2>404 - Section Not Found</h2><p>The requested section does not exist.</p>";
        }
        ?>
    </main>

    <footer class="resume-footer">
        <p>&copy; 2026 Ryza Marcelo. Please Hire Me.</p>
    </footer>
</div>

</body>
</html>