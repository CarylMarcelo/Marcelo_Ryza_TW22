<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "myDB";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO DogInformation (name, breed, age, address, color, height, weight) 
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if ($conn->query($sql) === TRUE) {
        $message = "New record created successfully!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Registration</title>
    <link rel="stylesheet" type="text/css" href="Dog.css">
</head>
<body>

<div class="form-container">
    <h3>Dog Information</h3>
    
    <?php if(!empty($message)): ?>
        <div class="success-msg"><?php echo $message; ?></div>
    <?php endif; ?>
    
    <form method="POST" action="">
        <label>Name</label>
        <input type="text" name="name" required>
        
        <label>Breed</label>
        <input type="text" name="breed" required>
        
        <label>Age</label>
        <input type="text" name="age" required>
        
        <label>Address</label>
        <input type="text" name="address" required>
        
        <label>Color</label>
        <input type="text" name="color" required>
        
        <label>Height (inches)</label>
        <input type="number" step="0.1" name="height" placeholder="e.g., 24" required>
        
        <label>Weight (lbs)</label>
        <input type="number" step="0.1" name="weight" placeholder="e.g., 70" required>
        
        <input type="submit" value="Save">
        <a href="DogView.php" class="view-btn">View List</a>
    </form>
</div>

</body>
</html>