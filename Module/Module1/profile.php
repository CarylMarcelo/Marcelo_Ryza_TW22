<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #d3d3d3;
        }
        
        .container {
            text-align: center;
        }

    </style>
</head>
<body>
    <?php
        $last_name = "Calleja";
        $first_name = "Joseph";
        $fave_motto = "I am who I am, your approval is not needed.";
    ?>

    <!-- div.container>div.header>h1^div.motto>p -->
    <div class="container">
        <div class="header">
            <h1><?= $first_name . " " . $last_name ?></h1>
        </div>
        <div class="motto">
            <p><?= $fave_motto ?></p>
        </div>
    </div>

    <div>
        <a href="AboutMyFriendsM1.php">Go back to home page</a>
    </div>
</body>
</html>