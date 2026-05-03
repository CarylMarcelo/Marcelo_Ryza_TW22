<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Page</title>
</head>
<body>
    <h1><?php echo "Hello, PHP!"; ?></h1>
    <h4><?= "Scripting is fun..."; ?></h4>

    <!-- div>a:link{See my profile} -->
    <div>
        <a href="profile.php">See my profile</a>
    </div>

    <?php
        $var = 12;
        var_dump($var);
        echo $var . "<br>";

        $var = "Joseph";
        var_dump($var);
        echo "$var<br>";

        echo "Hi, I am $var.<br>";
        echo 'Hi, I am $var.<br>';

        echo "Hi, I am " . $var . ".<br>";

        echo "I\'m excited to learn PHP!!!<br>";
        echo 'I\'m excited to learn PHP!!!';

        echo "<br>";
        $var = 8;
        var_dump($var);
        echo "<br>";
        $var = (float)8;
        echo gettype($var);
        echo "<br>";
        $var = (bool)8;
        var_dump($var);
        echo "<br>";
        $var = (string)8;
        var_dump($var);
        echo "<br>";
    ?>
</body>
</html>