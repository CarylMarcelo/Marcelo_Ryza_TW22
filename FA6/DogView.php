<!DOCTYPE html>
<html>
<head>
    <title>View Dogs</title>
    <link rel="stylesheet" type="text/css" href="Dog.css">
</head>
<body>

<div class="view-container">
    
    <a href="DogRegister.php" class="view-btn" style="margin-bottom: 20px;">+ Register Another Dog</a>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM DogInformation";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $counter = 1;
        while($row = $result->fetch_assoc()) {
            echo "<div class='dog-card'>";
            echo "<strong>Dog " . $counter . "</strong><br><br>";
            echo "<b>Name:</b> " . $row["name"] . "<br>";
            echo "<b>Breed:</b> " . $row["breed"] . "<br>";
            echo "<b>Age:</b> " . $row["age"] . "<br>";
            echo "<b>Address:</b> " . $row["address"] . "<br>";
            echo "<b>Color:</b> " . $row["color"] . "<br>";
            echo "<b>Height:</b> " . $row["height"] . " inches<br>";
            echo "<b>Weight:</b> " . $row["weight"] . " lbs<br>";
            
            echo "</div>";
            $counter++;
        }
    } else {
        echo "<div class='dog-card'>0 results found in the database.</div>";
    }

    $conn->close();
    ?>
</div>

</body>
</html>